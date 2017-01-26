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

//Authentification routes
Auth::routes();

//Route::resource('Orders');

//Override Stores permission
/**
Route::get('stores',  ['uses' => 'StoresController@index', 'as' => 'stores.index', 'middleware'=>'permission:list-stores']);
Route::get('stores/create',  ['uses' => 'StoresController@create', 'as' => 'stores.create', 'middleware'=>['permission:create-stores']]);
Route::get('stores/{id}/edit', ['uses' => 'StoresController@edit', 'as' => 'stores.edit', 'middleware'=>['permission:edit-stores', 'owner:stores']])->where('id', '[0-9]+');
Route::delete('stores/{id}', ['uses' => 'StoresController@destroy', 'as' => 'stores.destroy','middleware'=>['permission:delete-stores', 'owner:stores']])->where('id', '[0-9]+');
Route::get('stores/{id}', ['uses' => 'StoresController@show', 'as' => 'stores.show', 'middleware'=>['permission:show-stores', 'owner:stores']])->where('id', '[0-9]+');
Route::post('stores', ['uses' => 'StoresController@store', 'as' => 'stores.store', 'middleware' => 'permission:create-stores']);
Route::put('stores/{id}', ['uses' => 'StoresController@update', 'as' => 'stores.update', 'middleware' => 'permission:edit-stores']);
**/

//Override Users permission
Route::get('users',  ['uses' => 'UsersController@index', 'as' => 'users.index', 'middleware'=>'permission:list-users']);
Route::get('users/create',  ['uses' => 'UsersController@create', 'as' => 'users.create', 'middleware'=>['permission:create-users', 'owner:users']]);
Route::get('users/{id}/edit', ['uses' => 'UsersController@edit', 'as' => 'users.edit', 'middleware'=>['permission:edit-users', 'owner:users']])->where('id', '[0-9]+');
Route::delete('users/{id}', ['uses' => 'UsersController@destroy', 'as' => 'users.destroy','middleware'=>['permission:delete-users', 'owner:users']])->where('id', '[0-9]+');
Route::get('users/{id}', ['uses' => 'UsersController@show', 'as' => 'users.show', 'middleware'=>['permission:show-users', 'owner:users']])->where('id', '[0-9]+');
Route::post('users', ['uses' => 'UsersController@store', 'as' => 'users.store', 'middleware' => 'permission:create-users']);
Route::put('users/{id}', ['uses' => 'UsersController@update', 'as' => 'users.update', 'middleware' => 'permission:edit-users']);

//Override Vouchers permission
Route::get('vouchers',  ['uses' => 'VouchersController@index', 'as' => 'vouchers.index', 'middleware'=>'permission:create-vouchers']);
//Route::get('vouchers/create',  ['uses' => 'VouchersController@create', 'as' => 'vouchers.create', 'middleware'=>'permission:create-vouchers']);
//Route::get('vouchers/{id}/edit', ['uses' => 'VouchersController@edit', 'as' => 'vouchers.edit', 'middleware'=>'permission:edit-vouchers'])->where('id', '[0-9]+');
//Route::delete('vouchers/{id}', ['uses' => 'VouchersController@destroy', 'as' => 'vouchers.destroy','middleware'=>'permission:delete-vouchers'])->where('id', '[0-9]+');
//Route::get('vouchers/{id}', ['uses' => 'VouchersController@show', 'as' => 'vouchers.show', 'middleware'=>'permission:show-vouchers'])->where('id', '[0-9]+');

    
    
//Override Orders permission
Route::get('orders',  ['uses' => 'OrdersController@index', 'as' => 'orders.index', 'middleware'=>['permission:list-orders']]);
//Route::get('orders/create',  ['uses' => 'OrdersController@create', 'as' => 'orders.create', 'middleware'=>'permission:create-orders']);
Route::get('orders/{id}/edit', ['uses' => 'OrdersController@edit', 'as' => 'orders.edit', 'middleware'=>['permission:edit-orders', 'owner:orders']])->where('id', '[0-9]+');
Route::delete('orders/{id}', ['uses' => 'OrdersController@destroy', 'as' => 'orders.destroy','middleware'=>['permission:delete-orders', 'owner:orders']])->where('id', '[0-9]+');
Route::get('orders/{id}', ['uses' => 'OrdersController@show', 'as' => 'orders.show', 'middleware'=>['permission:show-orders', 'owner:orders']])->where('id', '[0-9]+'); 
Route::post('orders', ['uses' => 'OrdersController@store', 'as' => 'orders.store', 'middleware' => 'permission:create-orders']);
Route::put('orders/{id}', ['uses' => 'OrdersController@update', 'as' => 'orders.update', 'middleware' => 'permission:edit-orders']);


//Override Orders permission
Route::get('invoices',  ['uses' => 'InvoiceController@index', 'as' => 'invoices.index', 'middleware'=>['permission:list-orders']]);
Route::get('invoices/create',  ['uses' => 'InvoiceController@create', 'as' => 'invoices.create', 'middleware'=>'permission:create-orders']);
Route::get('invoices/{id}/edit', ['uses' => 'InvoiceController@edit', 'as' => 'invoices.edit', 'middleware'=>['permission:edit-orders', 'owner:orders']])->where('id', '[0-9]+');
Route::delete('invoices/{id}', ['uses' => 'InvoiceController@destroy', 'as' => 'invoices.destroy','middleware'=>['permission:delete-orders', 'owner:orders']])->where('id', '[0-9]+');
Route::get('invoices/{id}', ['uses' => 'InvoiceController@show', 'as' => 'invoices.show', 'middleware'=>['permission:show-orders', 'owner:orders']])->where('id', '[0-9]+'); 
Route::post('invoices', ['uses' => 'InvoiceController@store', 'as' => 'invoices.store', 'middleware' => 'permission:create-orders']);
Route::put('invoices/{id}', ['uses' => 'InvoiceController@update', 'as' => 'invoices.update', 'middleware' => 'permission:edit-orders']);

//Override Orders permission
Route::get('products',  ['uses' => 'ProductsController@index', 'as' => 'products.index', 'middleware'=>['role:super-admin']]);
Route::get('products/create',  ['uses' => 'ProductsController@create', 'as' => 'products.create', 'middleware'=>'role:super-admin']);
Route::get('products/{id}/edit', ['uses' => 'ProductsController@edit', 'as' => 'products.edit', 'middleware'=>['role:super-admin']])->where('id', '[0-9]+');
Route::delete('products/{id}', ['uses' => 'ProductsController@destroy', 'as' => 'products.destroy','middleware'=>['role:super-admin']])->where('id', '[0-9]+');
Route::get('products/{id}', ['uses' => 'ProductsController@show', 'as' => 'products.show', 'middleware'=>['role:super-admin']])->where('id', '[0-9]+'); 
Route::post('products', ['uses' => 'ProductsController@store', 'as' => 'products.store', 'middleware' => 'role:super-admin']);
Route::put('products/{id}', ['uses' => 'ProductsController@update', 'as' => 'products.update', 'middleware' => 'role:super-admin']);
//Cart
Route::get('cart', ['uses' => 'CartController@index', 'as' => 'cart.index']);
Route::put('cart/{id}', ['uses' => 'CartController@update', 'as' => 'cart.update', 'middleware' => 'auth']);
//Override OrdersStatus permission
Route::group(['middleware' => 'role:super-admin'], function () {
    //OrderStatus
    Route::resource('order_status', 'OrdersStatusController');
    //OrderPaymentStatus
    Route::resource('order_payment_status', 'OrdersPaymentStatusController');
    //Groups
    //Route::resource('groups', 'GroupsController');
    
    //roles
    Route::resource('roles', 'RolesController');
    //Permission
    Route::resource('permissions', 'PermissionController');
    
    //route pour la gestion des permissions
    Route::get('/roles/{id}/permission', ['uses' => 'RolesController@editPermission', 'as' => 'role.editpermission'])->where('id','[0-9]+');
    Route::put('/roles/{id}/permission', ['uses' => 'RolesController@updatePermission', 'as' => 'role.updatepermission'])->where('id','[0-9]+');
    //Route::resource('gestionpermission', 'GestionPermissionController', ['except' => ['update']]);
    
    
});



Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'home'] );
    //Dashboard
    Route::get('/dashboard', ['uses' => 'DashboardController@index', 'as' => 'dashboard']);
    //Vouchers
    Route::resource('vouchers', 'VouchersController', ['execpt' =>['create', 'update', 'edit', 'destroy', 'show']]);

    //get stores by group ajax
   // Route::get('/getStores', 'GroupsController@getStoresAjax');
    //get stores for user creation 
    //Route::get('/getStoreOrGroup','UsersController@getStoreOrGroupAjax');
    
    //changer le status archive d'une commande
    Route::get('/changeOrderStatus','OrdersController@changeOrderStatusAjax');
    Route::get('/changeNotificationStatusType/{id}','NotificationController@changeNotificationStatusTypeAjax');
    Route::get('/changeNotificationStatus/{id}','NotificationController@changeNotificationStatusAjax');
    
});

//Route::get('/cron', ['uses' => 'CronController@index', 'as' => 'cron']);
//Route::get('/test', ['uses' => 'CronController@test', 'as' => 'test']);