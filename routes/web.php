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

Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'admin'], function()
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

    Route::get('invoice', function () {
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

    Route::get('all-report','ReportController@tableReport');

    // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('item-category', 'ItemCategoryCrudController');
    CRUD::resource('customers', 'CustomersCrudController');
    Route::get('api/customer', 'CustomersCrudController@index2');
    Route::get('api/customer/{id}', 'CustomersCrudController@show2');
    Route::get('api/item-category', 'ItemCategoryCrudController@index2');
    Route::get('api/item-category/{id}', 'ItemCategoryCrudController@show2');


    CRUD::resource('invoices', 'InvoiceCrudController');
    CRUD::resource('open-items', 'OpenItemsCrudController');
    CRUD::resource('purchase', 'PurchaseCrudController');
    CRUD::resource('production', 'ProductionCrudController');
    CRUD::resource('items', 'ItemCrudController');
    CRUD::resource('checklist', 'CheckListCrudController');

    // [...] other routes

    Route::get('ajax-customer-phone', 'CustomersCrudController@getPhones');
    Route::get('ajax-customer-name', 'CustomersCrudController@getName');
    Route::get('ajax-open-item-number', 'OpenItemsCrudController@getOpenNumber');
    Route::get('ajax-open-item-user', 'OpenItemsCrudController@getUser');
});
