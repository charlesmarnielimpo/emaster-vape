<?php

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

Route::get('/', 'MainController@index');

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

// Categories
Route::group(['middleware' => 'admin'], function() {
	Route::get('/admin/categories', 'CategoryController@index')->name('categories');
	Route::post('/admin/categories', 'CategoryController@ajaxStore');
	Route::post('/admin/categories/{category}/ajaxShow', 'CategoryController@ajaxShow');
	Route::put('/admin/categories/{category}/ajaxUpdate', 'CategoryController@ajaxUpdate');
	Route::delete('/admin/categories/{category}/ajaxDestroy', 'CategoryController@ajaxDestroy');
});