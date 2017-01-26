<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::resource('user', 'UserController');
Route::resource('partner', 'PartnerController');
Route::resource('notification', 'NotificationController');
Route::resource('order', 'OrderController');
Route::resource('orderstate', 'OrderStateController');
Route::resource('orderdetail', 'OrderDetailController');
Route::resource('permission', 'PermissionController');
Route::resource('role', 'RoleController');
Route::resource('cart', 'CartController');
Route::resource('voucher', 'VoucherController');
Route::resource('product', 'ProductController');
Route::resource('invoice', 'InvoiceController');
Route::resource('payment', 'PaymentController');




