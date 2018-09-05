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



Auth::routes();

Route::get('/', 'MyController@home_fun')->name('');
Route::get('/category/{id}', 'MyController@category')->name('');




Route::get('auth/google', 'ApiController@redirectToProviderGoogle');
Route::get('auth/google/callback', 'ApiController@handleProviderCallbackGoogle');

// Route::get('/', 'HomeController@index')->name('');
Route::get('/contact-us', 'MyController@Contact')->name('');
Route::get('/product-details', 'MyController@product')->name('');
Route::get('/singlepage/{id}', 'MyController@singlepage')->name('');
// Route::get('/singlepage', 'MyController@singlepage')->name('');

// Cart Routes
Route::post('/add-to-cart', 'CartController@add_to_cart')->name('');
Route::get('/show-cart', 'CartController@show_cart')->name('');
Route::get('/delete-cart/{rowId}', 'CartController@delete_cart')->name('');
Route::post('/update-cart', 'CartController@update_cart')->name('');

// Checkout Routes
Route::get('/checkout-signup', 'CheckoutController@checkout_signup')->name('');
Route::post('/checkout-customer-signup', 'CheckoutController@checkout_customer_signup')->name('');
Route::post('/checkout-customer-login', 'CheckoutController@checkout_customer_login')->name('');
Route::get('/checkout-logout', 'CheckoutController@checkout_logout')->name('');
Route::get('/checkout/shipping', 'CheckoutController@checkout_shipping')->name('');
Route::post('/checkout-shipping-save', 'CheckoutController@checkout_shipping_save')->name('');


// Payment Routes

Route::get('/checkout/payment', 'CheckoutController@payment')->name('');
Route::post('/payment-from', 'CheckoutController@payment_form')->name('');

//Paypal Routes

Route::get('/paypal', 'PaypalController@index')->name('');
Route::post('/paypal', 'PaypalController@payWithpaypal')->name('');
Route::get('/status', 'PaypalController@getPaymentStatus');

// Route::get('/myadmin', 'AdminController@dash')->name('');
Route::get('admin', 'AdminController@dash')->name('');
Route::get('admin/permission', 'AdminController@permission')->name('');
Route::get('admin/user', 'UserController@index')->name('');
Route::get('admin/user/view/{id}', 'UserController@view')->name('');
Route::get('admin/user/add', 'UserController@add')->name('');
Route::post('/contact-us/submit', 'ContactController@insert')->name('');

// Back end contact
Route::get('admin/contact/view', 'ContactController@view')->name('');
Route::get('admin/contact/mark/{conus_id}', 'ContactController@mark')->name('');
Route::get('admin/contact/delete/{conus_id}', 'ContactController@delete')->name('');
// Back end contact

// Admin category Routes

Route::get('admin/category/add', 'CategoryController@addCategory')->name('');
Route::post('admin/category/save', 'CategoryController@insertCategory')->name('');
Route::get('admin/category/view', 'CategoryController@viewCategory')->name('');
Route::get('admin/category/edit/{id}', 'CategoryController@editCategory')->name('');
Route::post('admin/category/edit/submit', 'CategoryController@editsubmitCategory')->name('');
Route::get('admin/category/delete/{id}', 'CategoryController@deleteCategory')->name('');
Route::get('admin/category/singleview/{id}', 'CategoryController@singleviewCategory')->name('');

// Admin category Routes


// Admin manufacturer Routes

Route::get('admin/manufacturer/add', 'ManufacturerController@addManufacturer')->name('');
Route::post('admin/manufacturer/save', 'ManufacturerController@insertManufacturer')->name('');
Route::get('admin/manufacturer/view', 'ManufacturerController@viewManufacturer')->name('');
Route::get('admin/manufacturer/edit/{manu_id}', 'ManufacturerController@editManufacturer')->name('');
Route::post('admin/manufacturer/edit/submit', 'ManufacturerController@editsubmitManufacturer')->name('');
Route::get('admin/manufacturer/delete/{manu_id}', 'ManufacturerController@deleteManufacturer')->name('');
Route::get('admin/manufacturer/singleview/{manu_id}', 'ManufacturerController@singleviewManufacturer')->name('');

// Admin Manufacturer Routes

// Admin Product Routes

Route::get('admin/product/add', 'ProductController@addProduct')->name('');
Route::post('admin/product/save', 'ProductController@insertProduct')->name('');
Route::get('admin/product/manage', 'ProductController@manageProduct')->name('');
Route::get('admin/product/edit/{pro_id}', 'ProductController@editProduct')->name('');
Route::post('admin/product/edit/submit', 'ProductController@editsubmitProduct')->name('');
Route::get('admin/product/delete/{pro_id}', 'ProductController@deleteProduct')->name('');
Route::get('admin/product/view/{pro_id}', 'ProductController@viewProduct')->name('');

// Admin Product Routes
