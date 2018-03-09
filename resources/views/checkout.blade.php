@extends('layouts.master')

@section('title', 'Checkout')

@section('stylesheets')
  <link rel="stylesheet" href="{{ asset(App::environment('production') ? 'public/css/checkout.css' : 'css/checkout.css') }}">
@endsection

  @section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Checkout</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="{{ route('main.index') }}">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Checkout</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
          <!-- Checkout Adress-->
          <div class="col-xl-9 col-lg-8">
            <div class="checkout-steps">
              <a href="checkout-review.html">Payment</a>
              <a class="active" href="checkout-address.html"><span class="angle"></span>Shipping</a>
            </div>
            <h4>Shipping &amp; Billing Address</h4>
            <hr class="padding-bottom-1x">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-fn">First Name:</label>
                  <input class="form-control" type="text" id="checkout-fn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-ln">Last Name:</label>
                  <input class="form-control" type="text" id="checkout-ln">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="checkout-email">E-mail Address:</label>
                  @if(auth()->user())
                    <input class="form-control" type="email" id="txt-checkout-email" value="{{ auth()->user()->email }}" readonly>
                  @else
                    <input class="form-control" type="email" id="txt-checkout-email">
                  @endif                
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="checkout-phone">Mobile Number:</label>
                  <input class="form-control" type="text" id="checkout-phone">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  {{-- <label for="txt-checkout-province">Province:</label>
                  <input type="text" id="txt-checkout-province" class="form-control"> --}}
                  <label for="ddl-checkout-province">Province:</label>
                  <select class="form-control" id="ddl-checkout-province">
                    <option disabled selected>Choose Province</option>
                    @foreach($provinces as $province)
											<option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  {{-- <label for="txt-checkout-city">City/Municipality:</label>
                  <input type="text" id="txt-checkout-city" class="form-control"> --}}
                  <label for="ddl-checkout-city">City/Municipality:</label>
                  <select class="form-control" id="ddl-checkout-city">
                    <option disabled selected>Choose city/municipality</option>
                    {{-- @foreach($municipalities as $municipality)
											<option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                    @endforeach --}}
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="txt-checkout-barangay">Barangay:</label>
                  <input class="form-control" type="text" id="txt-checkout-barangay">
                </div>
              </div>
            </div>
            <h4>Choose Payment Option</h4>
            <hr class="padding-bottom-1x">
            <div class="form-group">
              <label class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" name="shipping-method" checked>
                <span class="custom-control-indicator"></span>
                <img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_74x46.jpg" border="0" alt="PayPal Logo"></a>
                {{-- <i class="fa fa-cc-paypal fa-5x"></i> --}}
              </label>
            </div>
            <div class="checkout-footer">
              <div class="column">
                <a class="btn btn-outline-secondary" href="{{ route('cart.index') }}">
                  <i class="icon-arrow-left"></i>
                  <span class="hidden-xs-down">&nbsp;Back To Cart</span>
                </a>
              </div>
              <div class="column">
                <a class="btn btn-primary" href="{{ route('payments.paypal') }}">
                  <span class="hidden-xs-down">Place Your Order&nbsp;</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- Sidebar -->
          <div class="col-xl-3 col-lg-4">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Order Summary Widget-->
              <section class="widget widget-order-summary">
                <h3 class="widget-title">Order Summary</h3>
                <table class="table">
                  <tr>
                    <td>Cart Subtotal:</td>
                    <td class="text-medium">${{ Cart::subtotal() }}</td>
                  </tr>
                  <tr>
                    <td>Shipping:</td>
                    <td class="text-medium">$0.00</td>
                  </tr>
                  <tr>
                    <td>Tax (12%):</td>
                    <td class="text-medium">${{ Cart::tax() }}</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-lg text-medium">${{ Cart::total() }}</td>
                  </tr>
                </table>
              </section>
              <!-- Featured Products Widget-->
              {{-- <section class="widget widget-featured-products">
                <h3 class="widget-title">Recently Viewed</h3>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/01.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>
                  </div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/02.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Top-Sider Fathom</a></h4><span class="entry-meta">$90.00</span>
                  </div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/03.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>
                  </div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/04.jpg" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>
                  </div>
                </div>
              </section>
              <!-- Promo Banner-->
              <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                  <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                  <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>
                </div>
              </section> --}}
            </aside>
          </div>
        </div>
      </div>
  @endsection

@section('scripts')
  <script src="{{ asset(App::environment('production') ? 'public/js/checkout.js' : 'js/checkout.js' )}}"></script>
@endsection