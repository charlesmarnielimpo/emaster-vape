<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use URL;
use Session;
use Redirect;
use Illuminate\Support\Facades\Input;
use Cart;
use Paypalpayment;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalPaymentController extends Controller
{  
    private $_api_context;
    public function __construct() {
        // setup PayPal api context
        $paypal_conf = Config::get('paypal_payment');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

	public function paywithPaypal() {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $count = 0;
        foreach (Cart::content() as $items) {
            $item_price = str_replace(',', '', $items->price);

            $item[$count] = new Item();
            $item[$count]->setName($items->name) // item name
                ->setSku($items->model->sku)
                ->setDescription($items->model->details)
                ->setCurrency('USD')
                ->setQuantity($items->qty)
                ->setUrl(route('shop.show', $items->model->slug))
                ->setPrice($item_price); // unit price
            $count++;
        }

        $tax_fee = str_replace(',', '', Cart::subtotal()) * 0.12;
        $total = str_replace(',', '', Cart::subtotal()) + $tax_fee;
        $shipping_fee = 5;
        // dd($total);
        // dd(Cart::total());

        // add item to list
        $item_list = new ItemList();
        $item_list->setItems($item);

        $details = new Details();
        $details->setTax($tax_fee)
            ->setShipping(5)
            ->setSubtotal(str_replace(',', '', Cart::subtotal()));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($total + $shipping_fee)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setInvoiceNumber(uniqid())
            ->setDescription('Your transaction description');
            // dd($transaction);

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payments.status'))
            ->setCancelUrl(URL::route('payments.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        
        try {
            $payment->create($this->_api_context);
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex->getCode(); // Prints the Error Code
            echo $ex->getData(); // Prints the detailed error message 
            die($ex);
        } catch (Exception $ex) {
            die($ex);
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        Session::put('paypal_payment_id', $payment->getId());
        if(isset($redirect_url)) {
            // redirect to paypal
            return Redirect::away($redirect_url);
        }
        return Redirect::route('main.index')
            ->with('error', 'Unknown error occurred');
    }    
    
    public function status() {
        // Get the payment ID before session clear
        $payment_id = Session::get('paypal_payment_id');
        // clear the session payment ID
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            return Redirect::route('main.index')
                ->with('error', 'Payment failed');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        // PaymentExecution object includes information necessary 
        // to execute a PayPal account payment. 
        // The payer_id is added to the request query parameters
        // when the user is redirected from paypal back to your site
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        
        //Execute the payment
        $result = $payment->execute($execution, $this->_api_context);
        // echo '<pre>';print_r($result);echo '</pre>';exit; // DEBUG RESULT, remove it later
        if ($result->getState() == 'approved') { // payment made
            Cart::destroy();

            return Redirect::route('main.index')
                ->with('success', 'Payment success');
        }
        return Redirect::route('main.index')
            ->with('error', 'Payment failed');
        }
    
}