<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $youMayAlsoLike = Product::where('slug', '!=', $slug)->inRandomOrder()->take(6)->get();
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('product')->with([
            'product' => $product,
            'youMayAlsoLike' => $youMayAlsoLike
        ]); 
    }
}
