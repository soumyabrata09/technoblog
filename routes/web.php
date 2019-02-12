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
use Gloudemans\Shoppingcart\Facades\Cart;
Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/thankyou',function(){
    return view('thankyou');
});
Route::get('/product',function(){
    return view('product');
});
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/cart', 'CartController@index')->name('cart.index'); //testing currently will route to the page cartPage.blade.php rather than routing to cart.blade.php , which was the previous behaviour
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::get('/checkout','CheckoutController@index')->name('checkoutpage.index');
Route::post('/cart/wishlist/{product}','CartController@switchToWishlist')->name('cart.switchToWishlist');

//cart destroy testing
Route::get('empty',function(){
    Cart::destroy();
});
//added by c_sousen purpose testing -> added lin to langding-page.blade.php as a starter page of technoblog.com 
// Route::get('/', function () {
//     return view('landing-page');
// });
 Route::get('/axiostest', 'LandingPageController@index')->name('landing-page');
Auth::routes();

//  Route::get('/home', 'HomeController@index')->name('home');
//added by c_sousen
//  $regex ='([A-z\d-\/_.]+)?';
// Route::get('{path}', 'HomeController@index')->where('path',$regex);
