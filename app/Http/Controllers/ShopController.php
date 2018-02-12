<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->category);
            })->paginate(9);
            $categories = Category::withCount('products')->get();
            $categoryName = $categories->where('slug', request()->category)->first()->name;
        } else {
            $categories = Category::withCount('products')->get();
            $products = Product::where('featured', true)->paginate(12);
            $categoryName = 'Featured';
        }

        return view('shop')->with([
            'categories' => $categories,
            'categoryName' => $categoryName,
            'products' => $products
        ]);
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
