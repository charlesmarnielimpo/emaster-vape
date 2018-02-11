<?php

use Gloudemans\Shoppingcart\Facades\Cart;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index')->name('main.index');

/**********************
 ******** SHOP ********
 **********************/
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

/**********************
 ******** CART ********
 **********************/
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::get('/empty', 'CartController@empty')->name('cart.empty');

/**********************
 * LOGIN AND SIGN UP  *
 **********************/
Auth::routes();
// to logout user by entering /logout uri
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

/******************
 * ADMINISTRATOR  *
 ******************/

// Dashboard
Route::get('/admin/dashboard', 'DashboardController@index')->middleware('admin')->name('dashboard');

Route::group(['middleware' => 'admin'], function() {
	// Categories
	Route::get('/admin/categories', 'CategoryController@index')->name('categories');
	Route::post('/admin/categories', 'CategoryController@ajaxStore');
	Route::post('/admin/categories/{category}/ajaxShow', 'CategoryController@ajaxShow');
	Route::put('/admin/categories/{category}/ajaxUpdate', 'CategoryController@ajaxUpdate');
	Route::delete('/admin/categories/{category}/ajaxDestroy', 'CategoryController@ajaxDestroy');
	
	// Products
	Route::get('/admin/products', 'ProductController@index')->name('products');
	Route::get('/admin/products/create', 'ProductController@create')->name('create');
	Route::post('admin/products/store', 'ProductController@store')->name('store');

	// Users
	Route::get('/admin/users', 'UserController@index')->name('users');
});