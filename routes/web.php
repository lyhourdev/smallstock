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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
    Route::get('sale', function () {
        return view('pos.sale');
    });
    Route::get('invoice', function () {
        return view('pos.invoice');
    });
    Route::get('checklist', function () {
        return view('pos.checklist');
    });
    Route::get('invoice-print', function () {
        return view('pos.invoice_print');
    });
    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('item-category', 'Admin\ItemCategoryCrudController');
    CRUD::resource('customers', 'Admin\CustomersCrudController');
    CRUD::resource('open-items', 'Admin\OpenItemsCrudController');
    CRUD::resource('purchase', 'Admin\PurchaseCrudController');
    CRUD::resource('items', 'Admin\ItemCrudController');
    // [...] other routes

    Route::get('ajax-customer-phone', 'Admin\CustomersCrudController@getPhones');
    Route::get('ajax-customer-name', 'Admin\CustomersCrudController@getName');

    Route::get('ajax-open-item-number', 'Admin\OpenItemsCrudController@getOpenNumber');
    Route::get('ajax-open-item-user', 'Admin\OpenItemsCrudController@getUser');
});
