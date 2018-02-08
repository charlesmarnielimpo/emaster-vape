<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Product_images;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select('id', 'category_name')->get();

        return view('admin.products.create')->with('categories', $categories);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, array(
                'product_name' => 'required|string|max:50',
                'product_category' => 'required',
                'product_price' => 'required',
                'product_quantity' => 'required|numeric',
                'product_points' => 'required|numeric'
            ));

        $product = New Product;

        $product->name = $request->product_name;
        $product->sku = rand(100000, 999999);
        $product->price = $request->product_price;
        $product->quantity = $request->product_quantity;
        $product->points = $request->product_points;
        $product->save();

        $product_images = $request->file('product_image');

        if (!empty($product_images)) {
            foreach($product_images as $product_image) {
                $imageName = uniqid() . '.' .$product_image->guessClientExtension();
                $url = 'public/img/products/'.$imageName;
                $product_image->move('../public/img/products/', $imageName);

                $product_image = New Product_images;

                $product_image->product_id = $product->id;
                $product_image->url = $url;

                $product_image->save();
            }
        }

        $notification = array(
            'alert-type' => 'success'
        );

        return array('status' => 'OK', 'product' => $product, 'product_image' => $product_image,'notification' => $notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
