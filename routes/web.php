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
    Route::get('/test', function () {
        return view('test');
    });

    Route::get('home', function () {
        return view('pos.home');
    });

    Route::get('sale', function () {
        return view('pos.sale');
    });

    Route::get('invoice-landscape-a5', function () {
        return view('pos.invoice.invoice_landscape_a5');
    });
    Route::get('p_invoice', function () {
        return view('pos.invoice.p_invoice');
    });

    Route::get('invoice-a', function () {
        return view('pos.invoice.invoice');
    });
    Route::get('invoice-print', function () {
        return view('pos.invoice.invoice_print');
    });
    Route::get('cash-receipt', function () {
        return view('pos.invoice.cash_receipt');
    });
    Route::get('print-receipt', function () {
        return view('pos.invoice.print_receipt');
    });

    Route::get('print-rks', function () {
        return view('pos.invoice.print_rks');
    });
    Route::get('print_', function () {
        return view('pos.invoice.print_a4');
    });

    Route::get('tax-invoice', function () {
        return view('pos.invoice.tax_invoice');
    });
    Route::get('tax-invoice2', function () {
        return view('pos.invoice.tax_invoice2');
    });

    Route::get('tax-invoice3', function () {
        return view('pos.invoice.tax_invoice3');
    });

    Route::get('print-invoice', function () {
        return view('pos.invoice.print_invoice');
    });

    Route::get('list-count-stock', function () {
        return view('pos.stock.list_count_stock');
    });

    Route::get('home', function () {
        return view('pos.home');
    });

    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('item-category', 'Admin\ItemCategoryCrudController');
    CRUD::resource('customers', 'Admin\CustomersCrudController');
    Route::get('api/customer', 'Admin\CustomersCrudController@index2');
    Route::get('api/customer/{id}', 'Admin\CustomersCrudController@show2');
    Route::get('api/item-category', 'Admin\ItemCategoryCrudController@index2');
    Route::get('api/item-category/{id}', 'Admin\ItemCategoryCrudController@show2');


    CRUD::resource('invoices', 'Admin\InvoiceCrudController');
    CRUD::resource('open-items', 'Admin\OpenItemsCrudController');
    CRUD::resource('purchase', 'Admin\PurchaseCrudController');
    CRUD::resource('production', 'Admin\ProductionCrudController');
    CRUD::resource('items', 'Admin\ItemCrudController');
    CRUD::resource('checklist', 'Admin\CheckListCrudController');

    // [...] other routes

    Route::get('ajax-customer-phone', 'Admin\CustomersCrudController@getPhones');
    Route::get('ajax-customer-name', 'Admin\CustomersCrudController@getName');
    Route::get('ajax-open-item-number', 'Admin\OpenItemsCrudController@getOpenNumber');
    Route::get('ajax-open-item-user', 'Admin\OpenItemsCrudController@getUser');
});
