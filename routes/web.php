<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','ShopController@index' );
Route::get('/add-product', 'ShopController@addProduct');
Route::post('/store','ShopController@store');
Route::get('/sportas','ShopController@sportas');
Route::get('/delete/{product}','ShopController@delete');
Route::get('/update/{product}','ShopController@update');
Route::patch('/storeupdate/{product}','ShopController@storeupdate');
Route::get('/add-category','ShopController@addCategory');
//Route::get('/add-to-cart/{id}',[
//   'uses'=> 'ShopController@addToCart',
//    'as' =>'product.addToCart']);
//Route::get('/shopping-cart',[
//    'uses'=> 'ShopController@getCart',
//    'as' =>'product.shoppingCart']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware'=> ['auth','admin']], function (){
    Route::get('/dashboard','ShopController@admin');
});

