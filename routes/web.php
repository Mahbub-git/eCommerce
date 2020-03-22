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
//Route::any('/{any}','HomeController@index')->where('any', '.*');

Route::get('/','MainController@index')->name('home');
Route::get('/get-categories','MainController@getCategories');
Route::get('/featured-products','MainController@featuredProducts');
Route::get('/new-products','MainController@newProducts');
Route::get('/get-products-by-id/{id}','MainController@getProductsbyCatId');
Route::get('/getproduct-by-id/{id}','MainController@getProductbyId');

Route::post('/add-to-cart','CartController@addCart');
Route::get('/show-cart','CartController@showCart');
Route::get('/delete-cart/{id}','CartController@deleteCart');
Route::post('/update-cart/{rowId}','CartController@updateCart');

Route::get('/checkout','CheckoutController@checkout');
Route::post('/checkout/registration','CheckoutController@checkoutRegister')->name('checkout-registration');
Route::post('/checkout/login','CheckoutController@checkoutLogin')->name('checkout-login');
Route::post('/checkout/logout','CheckoutController@checkoutLogout')->name('checkout-logout');
Route::get('/shipping','CheckoutController@shippingForm');
Route::post('/checkout/shipping','CheckoutController@checkoutShipping')->name('checkout-shipping');
Route::get('/checkout/payment','CheckoutController@paymentForm');
Route::post('/checkout/order/confirm','CheckoutController@confirmOrder')->name('confirm-order');
Route::get('/order/success','CheckoutController@successOrder')->name('success-order');

Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category','CategoryController@index')->name('category');
Route::post('/category','CategoryController@saveCategory')->name('category-save');
Route::get('/category/unpublished/{id}','CategoryController@unpublishedCategory')->name('unpub-category');
Route::get('/category/published/{id}','CategoryController@publishedCategory')->name('pub-category');
Route::post('/category/update','CategoryController@updateCategory')->name('category-update');
Route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('delete-category');

Route::group(['middleware'=>'AdminMiddleware','middleware'=>'SuperAdminMiddleware'],function (){
    Route::resource('brands','BrandController');
    Route::get('brand/unpublished/{id}','BrandController@unpublishedBrand')->name('unpub-brand');
    Route::get('brand/published/{id}','BrandController@publishedBrand')->name('pub-brand');
});

Route::resource('product','ProductController');

Route::resource('user','UserController')->middleware('SuperAdminMiddleware');

Route::get('orders','OrderController@index');
Route::get('/orders/details/{id}','OrderController@viewDetails')->name('view-order-details');
Route::get('/orders/invoice/{id}','OrderController@viewInvoice')->name('view-invoice');
Route::get('/orders/pdf/{id}','OrderController@viewPDF')->name('view-pdf');

Route::get('export', 'OrderController@export')->name('export');




