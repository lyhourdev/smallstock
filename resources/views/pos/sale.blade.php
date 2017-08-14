@extends('backpack::layout1')
@section('graph_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('pos') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/select2/select2.min.css">
@endsection

@section('content')
    <div class="cover-add" id="overlay">
        <div id="container">
            <div id="left-panel">
                <img class="profile-user-img img-responsive img-circle" src="{{ asset('vendor/adminlte') }}/dist/img/user4-128x128.jpg" alt="User profile picture">
                <h3 class="profile-username text-center">Sale Management</h3>
                <div id="left-top">

                    <div class="col-md-12" style="padding-left:0;">
                        <div class="form-group">
                            <div class="input-group">
                                <style>
                                    .select2-container .select2-selection--single {
                                        height: 34px !important;
                                    }
                                </style>
                                <div class="">
                                    {{--disabled="disabled"--}}
                                    <select class="form-control select2" style="width: 100%;">
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>

                                <div class="input-group-addon no-print" style="padding: 2px 5px; border-left: 0;">
                                    <a href="#"  data-toggle="modal" data-target="#viewCustomerModal" id="view-customer" class="external">
                                        <i class="fa fa-2x fa-user" id="addIcon"></i>
                                    </a>
                                </div>
                                <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                    <a href="#"  data-toggle="modal" data-target="#addCustomerModal" id="add-customer" class="external">
                                        <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                    </a>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div class="col-md-12" style="padding:0;">
                        <div class="no-print">
                            <div class="form-group" id="ui">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">All Category &nbsp;&nbsp; <span class="fa fa-caret-down"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Rings</a></li>
                                            <li><a href="#">Bracelets</a></li>
                                            <li><a href="#">Necklaces</a></li>
                                            <li><a href="#">Earrings</a></li>
                                            <li><a href="#">Brooches</a></li>
                                            <li><a href="#">Pendents</a></li>
                                            <li><a href="#">Anklets</a></li>
                                            <li><a href="#">Belly Chain</a></li>
                                        </ul>
                                    </div>
                                    <input type="text" name="add_item" value="" class="form-control pos-tip ui-autocomplete-input"
                                           id="add_item" data-placement="top" data-trigger="focus"
                                           placeholder="Search product by name/code" title="Please start typing code/name for suggestions" autocomplete="off">
                                    <div class="input-group-addon" style="padding: 2px 5px;">
                                        <a href="#" id="search_details">
                                            <i class="fa fa-2x fa-search" id="addIcon"></i>
                                        </a>
                                    </div>
                                    <div class="input-group-addon" style="padding: 2px 5px;">
                                        <a href="#" id="addManually">
                                            <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                        </a>
                                    </div>
                                    <div class="input-group-addon" style="padding: 2px 5px;">
                                        <a href="#" id="search_floor">
                                            <i class="fa fa-2x fa-th" id="addIcon"></i>
                                        </a>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>


                <div class="col-md-12 col-sm-12 panel-height">
                    <div class="tbl-header">
                        <table class="table table-action">
                            <thead style="width:100%;">
                            <tr>
                                <th style="width:15%;">#Code</th>
                                <th style="width:30%;">Name</th>
                                <th style="width:10%;">Qty</th>
                                <th style="width:20%;">Price</th>
                                <th style="width:20%;">Total</th>
                                <th style="width: 10%;"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div style="width:100%;overflow:auto; max-height:429px; text-align: center;">
                        <table style="width:100%;">
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;"><input type="text" value="" placeholder=" 0 " style="width: 100%;"></td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;"><input type="text" value="" placeholder=" 0 " style="width: 100%;"></td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>



                        </table>
                    </div>
                </div>
                {{--<div class="col-md-12 col-sm-12 total_amount">--}}
                    {{--<div class="col-md-5 col-sm-6 col-xs-12 title-total">SUB TOTAL:</div>--}}
                    {{--<div class="col-md-7 col-sm-6 col-xs-12 result-total"><input type="text" value="" readonly placeholder=" $ 1000.00" style="width: 100%;"></div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 col-sm-12 total_amount">--}}
                    {{--<div class="col-md-5 col-sm-6 col-xs-12 title-total">DISCOUNT:</div>--}}
                    {{--<div class="col-md-7 col-sm-6 col-xs-12 result-total"><input type="text" value="" placeholder=" $ 0.00" style="width: 100%;"></div>--}}
                {{--</div>--}}
                {{--<div class="col-md-12 col-sm-12 total_amount">--}}
                    {{--<div class="col-md-5 col-sm-6 col-xs-12 title-total">GRAND TOTAL:</div>--}}
                    {{--<div class="col-md-7 col-sm-6 col-xs-12 result-total"><input type="text" value="" readonly placeholder=" $ 1000.00" style="width: 100%;"></div>--}}
                {{--</div>--}}
                <div class="col-md-12 col-sm-12 checkout_amount">
                    <div id="left-bottom">
                        <table id="totalTable" style="width:100%; float:right; padding:5px; color:#000; background: #FFF;">
                            <tbody><tr>
                                <td style="padding: 5px 10px; font-size: 16px;">Items <span style="padding: 5px 10px; font-size: 16px; font-weight:bold;" id="titems">4 (4)</span></td>
                                <td class="text-right">
                                    Rate <span style="padding: 5px 10px;font-size: 16px; font-weight:bold;" id="khmer_rate">4,200  ៛</span>
                                </td>
                                <td style="padding: 5px 10px; font-size: 16px;">Total</td>
                                <td class="text-right" style="padding: 5px 10px;font-size: 16px; font-weight:bold;">
                                    <span id="total">1,900.00</span>
                                </td>

                            </tr>
                            <tr>
                                <td style="padding: 5px 10px; font-size: 16px;">Order Tax
                                    <a href="#" id="pptax2" data-toggle="modal" data-target="#taxModal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td class="text-right" style="padding: 5px 10px;font-size: 16px; font-weight:bold;">
                                    <span id="ttax2">(0)0.00</span>
                                </td>

                                <td style="padding: 5px 10px; font-size: 16px;">Discount
                                    <a href="#" id="ppdiscount" data-toggle="modal" data-target="#discountModal">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>

                                <td class="text-right" style="padding: 5px 10px; font-size: 16px; font-weight:bold;">
                                    <span id="tds">(0) 0.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px 10px; border-top: 1px solid #666; font-size: 20px; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                    Total Payable                                        </td>
                                <td class="text-right" style="padding:5px 10px 5px 10px; font-size: 16px; border-top: 1px solid #666; font-weight:bold; background:#333; color:#FFF;" colspan="2">
                                    <span style="float:left" id="gtotal_kh">(៛ 79,80,000)</span>
                                    <span id="gtotal">1,900.00</span>
                                </td>
                            </tr>
                            </tbody></table>

                        <div class="clearfix"></div>
                        <div id="botbuttons" style="text-align:center;">

                            <div class="btn-group btn-group-justified">
                                <div class="btn-group">
                                    <div class="btn-group btn-group-justified">
                                        <div class="btn-group">
                                            <button data-toggle="modal" data-target="#cancelModal" type="button" title="Cancel Order - F4" style="height:68px; border-radius: 0% !important;" class="btn btn-danger" id="reset">
                                                <i class="fa fa-remove"></i> Cancel</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <div class="btn-group btn-group-justified">
                                        <div class="btn-group">
                                            <button type="button" title="Print Order - F9" style="border-radius: 0% !important;" class="btn btn-primary" id="print_order">
                                                <i class="fa fa-print"></i> Print Order
                                            </button>
                                            <button type="button" title="Print Bill - F3" class="btn btn-primary" id="print_bill" style="margin-left: 0 !important; border-radius: 0% !important;">
                                                <i class="fa fa-print"></i> Print Bill
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="btn-group">
                                    <button data-toggle="modal" data-target="#largeModal" title="Payment - F8" style="height:68px; border-radius: 0% !important;" class="btn btn-success" id="payment">
                                        <i class="fa fa-money"></i> Payment
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div style="clear:both; height:5px;"></div>
                        {{--<div id="num">--}}
                            {{--<div id="icon"></div>--}}
                        {{--</div>--}}
                        {{--<span id="hidesuspend"></span>--}}

                    </div>
                </div>


            </div>
            <div id="right-section">
                {{--<div class="col-md-12">--}}
                    {{--<div class="input-group margin">--}}
                        {{--<div class="input-group-btn">--}}
                            {{--<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">All Category &nbsp;&nbsp; <span class="fa fa-caret-down"></span>--}}
                            {{--</button>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Rings</a></li>--}}
                                {{--<li><a href="#">Bracelets</a></li>--}}
                                {{--<li><a href="#">Necklaces</a></li>--}}
                                {{--<li><a href="#">Earrings</a></li>--}}
                                {{--<li><a href="#">Brooches</a></li>--}}
                                {{--<li><a href="#">Pendents</a></li>--}}
                                {{--<li><a href="#">Anklets</a></li>--}}
                                {{--<li><a href="#">Belly Chain</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<input type="text" class="form-control" placeholder="Search product by category/name/code" style="background-color: #ffffff; color: #000000;">--}}
                        {{--<span class="input-group-btn">--}}
                        {{--<button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-search"></i></button>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-md-12 cat-items-style">
                    <div id="slider-2" class="slider">
                        <div class="slider-wrapper">
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-aqua">
                                        <div class="bg-size">
                                        <span>
                                            <i><img width="50" height="50" src="{{asset('pos/icon/sale.png')}}"></i>
                                        </span>
                                            <br>
                                            <span class="fon-size"><b>Rings</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-green">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/purchase.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Bracelets</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-aqua">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/stock-in.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Necklaces</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-red">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/check.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Earrings</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-green">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/customer.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Brooches</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-gray">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/report.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Pendents</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-green">
                                        <div class="bg-size">
                                        <span>
                                            <i><img width="50" height="50" src="{{asset('pos/icon/report.png')}}"></i>
                                        </span>
                                            <br>
                                            <span class="fon-size"><b>Anklets</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-blue">
                                        <div class="bg-size">
                                        <span>
                                            <i><img width="50" height="50" src="{{asset('pos/icon/report.png')}}"></i>
                                        </span>
                                            <br>
                                            <span class="fon-size"><b>Belly Chain</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="slider-button--prev">
                            <i class="fa fa-fw fa-chevron-left"></i>
                        </a>
                        <a href="#" class="slider-button--next">
                            <i class="fa fa-fw fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                {{--====================items==================--}}
                <div class="col-md-12 items-style">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 top-item-style">
                        <div class="padding-around">
                            {{--<i class="fa fa-fw fa-plus-circle add-pro"></i>--}}
                            <img class=" open-button img-padding" width="120" height="120" src="{{asset('/pos/img/item3.jpg')}}" alt="...">
                            <div class="name-style  open-button" >item name one</div>
                            <div class="id-style  open-button"><b><span>$</span> 1000</b></div>
                            <div class="id-style  open-button"><b><span>ID:</span> P00001</b></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 top-item-style">
                        <div class="padding-around">
                            {{--<i class="fa fa-fw fa-plus-circle add-pro"></i>--}}
                            <img class=" open-button img-padding" width="120" height="120" src="{{asset('/pos/img/item3.jpg')}}" alt="...">
                            <div class="name-style  open-button2" >item name two</div>
                            <div class="id-style  open-button2"><b><span>$</span> 1000</b></div>
                            <div class="id-style  open-button2"><b><span>ID:</span> P00001</b></div>
                        </div>
                    </div>

                </div>
                {{--====================end items==================--}}
            </div>

        </div>
    </div>


    {{--==========================================fade in ============================--}}
    {{--<div class="container">--}}
        {{--<div class="row text-center">--}}
            {{--<h3>The Basic Modal</h3>--}}
            {{--<a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">Click to open Modal</a>--}}
        {{--</div>--}}
        {{--<hr>--}}
        {{--<div class="row text-center">--}}
            {{--<h3>The Large Modal</h3>--}}
            {{--<a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#largeModal">Click to open Modal</a>--}}
        {{--</div>--}}
        {{--<hr>--}}
        {{--<div class="row text-center">--}}
            {{--<h3>The Small Modal</h3>--}}
            {{--<a href="#" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#smallModal">Click to open Modal</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">--}}
        {{--<div class="modal-dialog modal-lg">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                    {{--<h4 class="modal-title" id="myModalLabel">Large Modal</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<h3>Modal Body</h3>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;"><i class="fa fa-2x">×</i>
                    </button><div class="bootbox-body">Are you sure?</div></div><div class="modal-footer">
                    <button data-bb-handler="cancel" type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                    <button data-bb-handler="confirm" type="button" class="btn btn-primary">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="discountModal" tabindex="-1" role="dialog" aria-labelledby="discountModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i></button>
                    <h4 class="modal-title" id="dsModalLabel">Edit Order Discount</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="order_discount_input">Order Discount</label>
                        <input type="text" name="order_discount_input" placeholder="$ 0.00 " value="" class="form-control kb-pad" id="order_discount_input">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="updateOrderDiscount" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="taxModal" tabindex="-1" role="dialog" aria-labelledby="taxModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i></button>
                    <h4 class="modal-title" id="txModalLabel">Edit Order Tax</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="order_tax_input">Order Tax</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                            <option selected="selected">No Tax</option>
                            <option>VAT @10%</option>
                            <option>GST @6%</option>
                            <option>VAT @20%</option>
                            <option>TAX @10%</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="updateOrderTax" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewCustomerModal" tabindex="-1" role="dialog" aria-labelledby="viewCustomerModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa fa-2x">×</i>
                    </button>
                    <button type="button" class="btn btn-primary btn-xs no-print pull-right " onclick="window.print()">
                        <i class="fa fa-print"></i>&nbsp;Print			</button>
                    <h4 class="modal-title" id="myModalLabel">Samet</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="margin-bottom:0;">
                            <tbody>
                            <tr>
                                <td><strong>Company</strong></td>
                                <td>Samet</td>
                            </tr>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td>Chanthy</td>
                            </tr>
                            <tr>
                                <td><strong>Customer Group</strong></td>
                                <td>General</td>
                            </tr>
                            <tr>
                                <td><strong>VAT Number</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Award Points</strong></td>
                                <td>510</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>poro@gmail.com</td>
                            </tr>
                            <tr>
                                <td><strong>Phone</strong></td>
                                <td>012 222 333</td>
                            </tr>
                            <tr>
                                <td><strong>Group Area</strong></td>
                                <td>Phnom Penh</td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong></td>
                                <td>40Eo, st.70B
                                    <span style="float:right;">
						<input type="radio" value="40Eo, st.70B" class="checkbox" name="address" id="addr">
						</span>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>address1</strong></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>address2</strong></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>address3</strong></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>address4</strong></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>address5</strong></td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>City</strong></td>
                                <td>Phnom Penh</td>
                            </tr>
                            <tr>
                                <td><strong>State</strong></td>
                                <td>Kondal</td>
                            </tr>
                            <tr>
                                <td><strong>Postal Code</strong></td>
                                <td>12002</td>
                            </tr>
                            <tr>
                                <td><strong>Country</strong></td>
                                <td>Cambodia</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer no-print">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="#" target="_blank" class="btn btn-primary">Customers Report</a>
                        <a href="#" data-toggle="modal" data-target="#editCustomerModal" class="btn btn-primary">Edit Customer</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCustomerModal" tabindex="-1" role="dialog" aria-labelledby="editCustomerModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Edit Customer</h4>
                </div>
                <form action="http://cloudnet-myanmar.com/iCloudERP_v3_Production/customers/edit/2" data-toggle="validator" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="novalidate" class="bv-form"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                    <input type="hidden" name="token" value="fcb41d11e2093a3c5b36ea9f4183c96e" style="display:none;">
                    <div class="modal-body">
                        <p>Please fill in the information below. The field labels marked with * are required input fields.</p>

                        <div class="form-group has-feedback">
                            <label class="control-label" for="customer_group">Default Customer Group *</label>

                            <div class="controls"> <div class="select2-container form-control tip select" id="s2id_customer_group" style="width:100%;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-71">General</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen71" class="select2-offscreen">Default Customer Group *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-71" id="s2id_autogen71"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen71_search" class="select2-offscreen">Default Customer Group *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-71" id="s2id_autogen71_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-71">   </ul></div></div><select name="customer_group" class="form-control tip select" id="customer_group" style="width: 100%; display: none;" required="required" data-bv-field="customer_group" tabindex="-1" title="Default Customer Group *">
                                    <option value="1" selected="selected">General</option>
                                    <option value="2">Reseller</option>
                                    <option value="3">Distributor</option>
                                    <option value="4">New Customer (+10)</option>
                                    <option value="5">Wholesale</option>
                                </select><i class="form-control-feedback" data-bv-icon-for="customer_group" style="display: none;"></i>
                            </div>
                            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="customer_group" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="price_group">Price Groups</label>

                                    <div class="controls"> <div class="select2-container form-control tip select" id="s2id_price_groups" style="width:100%;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-72">General</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen72" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-72" id="s2id_autogen72"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen72_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-72" id="s2id_autogen72_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-72">   </ul></div></div><select name="price_groups" class="form-control tip select" id="price_groups" style="width: 100%; display: none;" placeholder="Select Price Groups" tabindex="-1" title="">
                                            <option value="">No Price Group</option>
                                            <option value="1" selected="selected">General</option>
                                            <option value="7">Retail</option>
                                            <option value="6">Specail</option>
                                            <option value="2">wholesale</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="group_area">Group Area</label><div class="select2-container form-control tip select" id="s2id_group_area" style="width:100%;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-73">Phnom Penh</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen73" class="select2-offscreen">Group Area</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-73" id="s2id_autogen73"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen73_search" class="select2-offscreen">Group Area</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-73" id="s2id_autogen73_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-73">   </ul></div></div><select name="group_area" class="form-control tip select" id="group_area" style="width: 100%; display: none;" placeholder="Select Group Area" tabindex="-1" title="Group Area">
                                        <option value="">Select Group Area</option>
                                        <option value="1" selected="selected">Phnom Penh</option>
                                        <option value="2">Kompong Thom</option>
                                        <option value="3">Takhmau</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="code">Code *</label>                        <input type="text" name="code" value="CUS-0001" class="form-control tip" id="code" data-bv-notempty="true" data-bv-field="code"><i class="form-control-feedback" data-bv-icon-for="code" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="code" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
                                <div class="form-group person has-feedback">
                                    <label for="name">Name *</label>                        <input type="text" name="name" value="Chanthy" class="form-control tip" id="name" required="required" data-bv-field="name"><i class="form-control-feedback" data-bv-icon-for="name" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
                                <div class="form-group person">
                                    <label for="name_kh">KH Name</label>                        <input type="text" name="name_kh" value="សាម៉េត" class="form-control tip" id="name_kh">
                                </div>
                                <div class="form-group">
                                    <label for="vat_no">VAT Number</label>                        <input type="text" name="vat_no" value="" class="form-control" id="vat_no">
                                </div>
                                <!--<div class="form-group company">
                                <label for="contact_person">Contact Person</label>                                    </div> -->
                                <div class="form-group has-feedback">
                                    <label for="email_address">Email Address</label>                        <input type="email" name="email" class="form-control" id="email_address" value="poro@gmail.com" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small></div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>                        <input type="tel" name="phone" class="form-control" id="phone" value="012 222 333">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="address">Address *</label>
                                    <input type="text" name="address" value="40Eo, st.70B" class="form-control" id="address" data-bv-notempty="true" data-bv-field="address"><i class="form-control-feedback" data-bv-icon-for="address" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="address" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>

                                <div class="form-group">
                                    <label for="address1">address1</label>
                                    <input type="text" name="address1" value="" class="form-control" id="address1">
                                </div>
                                <div class="form-group">
                                    <label for="address2">address2</label>
                                    <input type="text" name="address2" value="" class="form-control" id="address2">
                                </div>
                                <div class="form-group">
                                    <label for="address3">address3</label>
                                    <input type="text" name="address3" value="" class="form-control" id="address3">
                                </div>
                                <div class="form-group">
                                    <label for="address4">address4</label>
                                    <input type="text" name="address4" value="" class="form-control" id="address4">
                                </div>
                                <div class="form-group">
                                    <label for="address5">address5</label>
                                    <input type="text" name="address5" value="" class="form-control" id="address5">
                                </div>

                                <div class="form-group">
                                    <label for="city">City</label>                        <input type="text" name="city" value="Phnom Penh" class="form-control" id="city">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>                        <input type="text" name="country" value="Cambodia" class="form-control" id="country">
                                </div>
                                <!--
            <div class="form-group">
                <label for="address2">address2</label>                        <input type="text" name="address2" value=""  class="form-control" id="address2"" />
            </div>
            <div class="form-group">
                <label for="address3">address3</label>                        <input type="text" name="address3" value=""  class="form-control" id="address3" />
            </div>
            <div class="form-group">
                <label for="award_points">Award Points</label>						<input type="text" name="award_points" value="510"  class="form-control tip" id="award_points" />
            </div>
            <div class="form-group">
                <label for="credit_limit">Credit Limit</label>						<input type="text" name="credit_limit" value=""  class="form-control tip" id="credit_limit" />
            </div>
            -->
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="form-group">
                                    <label for="postal_code">Postal Code</label>                        <input type="text" name="postal_code" value="12002"  class="form-control" id="postal_code" />
                                </div> -->
                                <div class="form-group company has-feedback">
                                    <label for="company">Company *</label>                        <input type="text" name="company" value="Samet" class="form-control tip" id="company" required="required" data-bv-field="company"><i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="company" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
                                <div class="form-group">
                                    <label for="status">Marital Status</label>                        <div class="select2-container form-control select" id="s2id_status" style="width:100%"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-74">Single</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen74" class="select2-offscreen">Marital Status</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-74" id="s2id_autogen74"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen74_search" class="select2-offscreen">Marital Status</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-74" id="s2id_autogen74_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-74">   </ul></div></div><select name="status" class="form-control select" id="status" placeholder="Select Status" style="width: 100%; display: none;" tabindex="-1" title="Marital Status">
                                        <option value="">Select Status</option>
                                        <option value="single" selected="selected">Single</option>
                                        <option value="married">Married</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>                        <div class="select2-container form-control select" id="s2id_gender" style="width:100%"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-75">Male</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen75" class="select2-offscreen">Gender</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-75" id="s2id_autogen75"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen75_search" class="select2-offscreen">Gender</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-75" id="s2id_autogen75_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-75">   </ul></div></div><select name="gender" class="form-control select" id="gender" placeholder="Select Gender" style="width: 100%; display: none;" tabindex="-1" title="Gender">
                                        <option value="">Select Gender</option>
                                        <option value="male" selected="selected">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cf1">Identity Number</label>                        <input type="text" name="cf1" value="" class="form-control" id="cf1">
                                </div>

                                <div class="form-group">
                                    <label for="cf4">Attachment</label><input id="attachment" type="file" name="userfile" data-show-upload="false" data-show-preview="false" class="file">

                                </div>
                                <div class="form-group">
                                    <label for="cf5">Date of Birth</label> Ex: YYYY-MM-DD                         <input type="text" name="date_of_birth" value="31/12/1988" class="form-control date" id=" date_of_birth">
                                </div>
                                <!--
                                <div class="form-group">
                                    <label for="cf6">Start Date</label> Ex: YYYY-MM-DD                        <input type="text" name="start_date" value="-0001-11-30"  class="form-control date" id=" start_date" />
                                </div>
                                <div class="form-group">
                                    <label for="cf7">End Date</label> Ex: YYYY-MM-DD                        <input type="text" name="end_date" value="-0001-11-30"  class="form-control date" id=" end_date" />
                                </div>
                                -->
                                <!--
                                <div class="form-group">
                                    <label for="saleman">saleman</label>                        <select name="saleman" class="form-control select" id="saleman" style="width:100%">
            <option value="0"></option>
            </select>
                                </div>
                                <div class="form-group"> <label for="payment_term">Payment Term</label><select name="payment_term" class="form-control tip select" id="payment_term" style="width:100%;" placeholder="Select Payment Term" >
            <option value="" selected="selected">No Payment Term</option>
            </select>
                                </div>
                                -->
                                <div class="form-group">
                                    <label for="state">State</label>                        <input type="text" name="state" value="Kondal" class="form-control" id="state">
                                </div>
                                <div class="form-group">
                                    <label for="postal_code">Postal Code</label>                        <input type="text" name="postal_code" value="12002" class="form-control" id="postal_code">

                                </div>
                                <!--		<div class="form-group"> <label for="group_area">Group Area</label><select name="group_area" class="form-control tip select" id="group_area" style="width:100%;" placeholder="Select Group Area" >
                    <option value="" selected="selected">Select Group Area</option>
                    <option value="1">Phnom Penh</option>
                    <option value="2">Kompong Thom</option>
                    <option value="3">Takhmau</option>
                    </select>
                                        </div>
                                        <div class="form-group" id="sale_area_box" style="display:none">
                                            <label for="sale_area">sale area</label><select name="sale_area" class="form-control tip select" id="sale_area" style="width:100%;" placeholder="Select Group Area" >
                    <option value="" selected="selected">Select Sale Area</option>
                    </select>
                                        </div> -->
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="edit_customer" value="Edit Customer" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="addCustomerModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Add Customer</h4>
                </div>
                <form action="#" data-toggle="validator" role="form" id="add-customer-form" enctype="multipart/form-data" method="post" class="bv-form">
                    <div class="modal-body">
                        <p>Please fill in the information below. The field labels marked with * are required input fields.</p>

                        <div class="form-group">
                            <label for="order_tax_input">Default Customer Group *</label>
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected">General</option>
                                <option>General</option>
                                <option>Reseller</option>
                                <option>Distributor</option>
                                <option>New Customer</option>
                                <option>Wholesale</option>
                            </select>
                        </div>

                        <div class="row">

                            <div class="col-md-6">


                                <div class="form-group">
                                    <label class="control-label" for="price_group">Price Groups</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected">No Price Group</option>
                                        <option value="1">General</option>
                                        <option value="7">Retail</option>
                                        <option value="6">Specail</option>
                                        <option value="2">wholesale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="price_group">Group Area</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected">Select Group Area</option>
                                        <option value="1">Phnom Penh</option>
                                        <option value="2">Kompong Thom</option>
                                        <option value="3">Takhmau</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="code">Code *</label>
                                    <input type="text" name="code" value="" class="form-control tip" id="code" data-bv-notempty="true" data-bv-field="code">
                                    <i class="form-control-feedback" data-bv-icon-for="code" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="code" data-bv-result="NOT_VALIDATED" style="display: none;">
                                        Please enter/select a value</small>
                                </div>
                                <div class="form-group person has-feedback">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" value="" class="form-control tip" id="name" data-bv-notempty="true" data-bv-field="name">
                                    <i class="form-control-feedback" data-bv-icon-for="name" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
                                <div class="form-group person">
                                    <label for="name_kh">KH Name</label>                        <input type="text" name="name_kh" value="" class="form-control tip" id="name_kh">
                                </div>
                                <div class="form-group">
                                    <label for="vat_no">VAT Number</label>                        <input type="text" name="vat_no" value="" class="form-control" id="vat_no">
                                </div>
                                <!--<div class="form-group company">
                                    <label for="contact_person">Contact Person</label>						<input type="text" name="contact_person" value=""  class="form-control" id="contact_person" data-bv-notempty="true" />
                                </div>-->

                                <div class="form-group has-feedback">
                                    <label for="email_address">Email Address</label>                        <input type="email" name="email" class="form-control" id="email_address" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small></div>
                                <div class="form-group has-feedback">
                                    <label for="phone">Phone *</label>						<input type="text" name="phone" value="" class="form-control" id="phone" data-bv-notempty="true" data-bv-field="phone"><i class="form-control-feedback" data-bv-icon-for="phone" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
                                <div class="form-group has-feedback">
                                    <label for="address">Address *</label> <span style="float:right;"><button class="btn btn-sm btn-primary add_more">Add More</button></span>
                                    <input type="text" name="address" value="" class="form-control" id="address" data-bv-notempty="true" data-bv-field="address"><i class="form-control-feedback" data-bv-icon-for="address" style="display: none;"></i>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="address" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter/select a value</small></div>
                                <div id="address_show" style="display:none;">
                                    <div class="form-group">
                                        <label for="address1">address1</label>
                                        <input type="text" name="address1" value="" class="form-control" id="address1">
                                    </div>
                                    <div class="form-group">
                                        <label for="address2">address2</label>
                                        <input type="text" name="address2" value="" class="form-control" id="address2">
                                    </div>
                                    <div class="form-group">
                                        <label for="address3">address3</label>
                                        <input type="text" name="address3" value="" class="form-control" id="address3">
                                    </div>
                                    <div class="form-group">
                                        <label for="address4">address4</label>
                                        <input type="text" name="address4" value="" class="form-control" id="address4">
                                    </div>
                                    <div class="form-group">
                                        <label for="address5">address5</label>
                                        <input type="text" name="address5" value="" class="form-control" id="address5">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>                        <input type="text" name="city" value="" class="form-control" id="city">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>                        <input type="text" name="country" value="" class="form-control" id="country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="form-group">
                                    <label for="postal_code">Postal Code</label>                        <input type="text" name="postal_code" value=""  class="form-control" id="postal_code" />
                                </div> -->
                                <div class="form-group company">
                                    <label for="company">Company</label>
                                    <input type="text" name="company" value="" class="form-control tip" id="company">
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="price_group">Marital Status</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected">Select Marital Status</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="price_group">Gender</label>
                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cf1">Identity Number</label>                        <input type="text" name="cf1" value="" class="form-control" id="cf1">
                                </div>

                                <div class="form-group">
                                    <label for="cf4">Attachment</label><input id="attachment" type="file" name="userfile" data-show-upload="false" data-show-preview="false" class="file">

                                </div>
                                <div class="form-group">
                                    <label for="cf5">Date of Birth</label> Ex: YYYY-MM-DD
                                    <input type="text" name="date_of_birth" value="" class="form-control date" id="datepicker date_of_birth">

                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" name="state" value="" class="form-control" id="state">
                                </div>
                                <div class="form-group">
                                    <label for="postal_code">Postal Code</label>
                                    <input type="text" name="postal_code" value="" class="form-control" id="postal_code">
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="add_customer" value="Add Customer" class="btn btn-primary">
                    </div>
                </form></div>
        </div>
    </div>



    {{--==========================================end fade in ============================--}}
    {{--================payment pop up =============--}}
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>--}}
                   <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">
                        <i class="fa fa-2x">×</i></span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="payModalLabel">Finalize Sale</h4>
                </div>
                <div class="modal-body" id="payment_content">
                    <div class="row">
                        <div class="col-md-10 col-sm-9">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="biller">IT Group(Phnom Penh)</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option value="1" selected="selected">IT Group(Phnom Penh)</option>
                                                <option value="5">CloudNET (Siem Rap)</option>
                                                <option value="10">Cloudnet (Myanmar)</option>
                                                <option value="13">3A-2222</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="date">Date</label> (yyyy-mm-dd)
                                        <input type="text" name="date" value="" class="form-control input-tip datetime" id="date" data-original-title="" title="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <textarea name="sale_note" cols="40" rows="10" id="sale_note"
                                                  class="form-control kb-text skip" style="height: 35px;" placeholder="Sale Note"
                                                  maxlength="250">

                                        </textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="select2-container form-control pos-input-tip" id="s2id_suspend_room" title="" style="width: 100%; display: block;">

                                            <span class="select2-chosen" id="select2-chosen-18">Room|Table</span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="saleman">Saleman</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option value="1" selected="">owner</option>
                                                <option value="ordered">user</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="delivery_by">Delivery by</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option value="4" selected="">Kaoly</option>
                                                <option value="ordered">other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="sale_status">Sale Status *</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option value="completed">Completed</option>
                                                <option value="pending">Pending</option>
                                                <option value="ordered">Ordered</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-sm-6">
                                        <label for="slref">Reference No</label>
                                        <div style="float:left;width:100%;">

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="reference_no" value="SALE/POS/1708/00008" class="form-control input-tip" id="slref" readonly="">
                                                    <input type="hidden" name="temp_reference_no" id="temp_reference_no" value="SALE/POS/1708/00008">
                                                    <div class="input-group-addon no-print" style="padding: 2px 5px;background-color:white;">
                                                        <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                                                            <input type="checkbox" name="ref_status" id="ref_st" value="1" style="margin: 0px; position: absolute;
                                                             top: -20%; left: -20%; display: block; width: 140%; height: 140%; padding: 0px; background: rgb(255, 255, 255);
                                                              border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block;
                                                               width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">

                                                            </ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!--<textarea name="staffnote" cols="40" rows="10"  id="staffnote" class="form-control kb-text skip" style="height: 35px;" placeholder="Staff Note" maxlength="250"></textarea>
    -->
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary col-md-12 addButton">
                                            <i class="fa fa-plus"></i> Add More Payments									</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfir"></div>
                            <div id="payments">
                                <div class="col-md-12 col-sm-9" style="padding:0;">
                                    <div class="font16">
                                        <table class="table table-bordered table-condensed table-striped" style="font-size: 1.2em; font-weight: bold; margin-bottom: 0;">
                                            <tbody>
                                            <tr>
                                                <th width="50%" style="text-align:left;">Currency</th>
                                                <th style="text-align:center;">USD</th>
                                                <th style="text-align:center;">KHM</th>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="height: 50px;">Total Items</td>
                                                <td class="text-right"><span id="item_count">17</span></td>
                                                <td class="text-right"><span class="item_count">17</span></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="height: 50px;">Total Payable</td>
                                                <td class="text-right"><span id="twt">5,580.00</span></td>
                                                <td class="text-right"><span class="curr_tpay" rate="4200.0000" id="twt">0.00</span></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="height: 50px;">Paid </td>
                                                <td class="text-right"><input name="amount[]" type="text" id="amount_1" class="pa form-control input-lg kb-pad amount" style="text-align:right;"></td>
                                                <td class="text-right">
                                                    <input name="other_cur_paid[]" rate="4200.0000" type="text" id="other_cur_paid" class="form-control input-lg kb-pad currencies_payment" style="text-align:right;">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" width="50%" style="text-align:left;">Remaining</td>
                                                <td class="text-right"><span id="remain_1" class="main_remain_1">0.00</span></td>
                                                <td class="text-right"><span class="curr_remain_1" rate="4200.0000" id="remain_1">0</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span id="remain" class="main_remain">0.00</span></td>
                                                <td class="text-right"><span class="curr_remain" rate="4200.0000" id="remain">0</span></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" width="50%" style="text-align:left;">Change</td>
                                                <td class="text-right"><span id="change_1">0.00</span></td>
                                                <td class="text-right"><span class="curr_change_1" rate="4200.0000" id="change_1">0</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span id="change">0.00</span></td>
                                                <td class="text-right"><span class="curr_change" rate="4200.0000" id="change">0</span></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="well well-sm well_1">
                                    <div class="payment">
                                        <div class="row" style="font-size: 1.2em; font-weight: bold; margin-bottom: 0;">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label style="font-size:13px;">Paying by</label>
                                                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                        <option value="cash">Cash</option>
                                                        <option value="CC">Credit Card</option>
                                                        <option value="Cheque">Cheque</option>
                                                        <option value="gift_card">Member Card</option>
                                                        <option value="deposit">Deposit</option>
                                                        <option value="depreciation">Loan</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <textarea name="payment_note[]" id="payment_note_1" style="height: 60px;" class="pa form-control kb-text payment_note" placeholder="Payment Note"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div id="multi-payment"></div>
                            <!--<button type="button" class="btn btn-primary col-md-12 addButton"><i
                                class="fa fa-plus"></i> Add More Payments</button>-->

                            <div style="clear:both; height:15px;"></div>

                        </div>
                        <div class="col-md-2 col-sm-3 text-center">
                            <span style="font-size: 1.2em; font-weight: bold;">Quick Cash</span>

                            <div class="btn-group btn-group-vertical">
                                <button type="button" class="btn btn-lg btn-info quick-cash" id="quick-payable">5580</button>
                                <input type="hidden" id="payable_amount" class="payable_amount" name="payable_amount" value="5580">
                                <button type="button" class="btn btn-lg btn-warning quick-cash">10</button>
                                <button type="button" class="btn btn-lg btn-warning quick-cash">20</button>
                                <button type="button" class="btn btn-lg btn-warning quick-cash">50</button>

                                <button type="button" class="btn btn-lg btn-warning quick-cash">100</button>
                                <button type="button" class="btn btn-lg btn-warning quick-cash">500</button><button type="button" class="btn btn-lg btn-warning quick-cash">1000</button><button type="button" class="btn btn-lg btn-warning quick-cash">5000</button>                            <button type="button" class="btn btn-lg btn-danger" id="clear-cash-notes">Clear</button>
                                <hr>
                                <div class="btn-group">
                                    <button onclick="location.href='{{url('admin/invoice')}}'" type="button" style="font-size: 1.2em; font-weight: bold; height:80px;" class="btn btn-success" id="submit-sale">
                                        <i class="fa fa-money"></i> Save                                </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--============end item pop up===========--}}
@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/select2/select2.full.min.js"></script>
    <script>
        (function($) {
            //Initialize Select2 Elements
            $(".select2").select2();
            $.fn.flexboxslider = function(opts) {
                var options = $.extend({}, $.fn.flexboxslider.defaults, opts);

                return this.each(function() {

                    var el = $(this), // el correspond au slider
                        $slides_container = el.find('.slider-wrapper'),
                        $slides = el.find('.slide'),
                        $slides_length = $slides.length,
                        prev = el.find('.slider-button--prev'),
                        next = el.find('.slider-button--next'),
                        slider_nav, // créé lors de l'initalisation
                        timer,
                        resizeTimer,
                        steps = 1,
                        current_step = 1,
                        items_per_step = 4;

                    function initialize() {

                        // initialisation du nombre d'étapes
                        items_per_step = options.items;
                        steps = Math.ceil($slides_length / items_per_step);
                        current_step = 1;

                        // DOM
                        $slides_container.wrap('<div class="slider-viewport"></div>');

                        if (options.show_nav) {
                            create_nav();
                        }

                        el.css({
                            'max-height':  options.max_height + 'px'
                        });

                        // Events
                        $(window).resize(resize);

                        prev.on('click', function(e) {
                            e.preventDefault();
                            move(current_step - 1);
                        });

                        next.on('click', function(e) {
                            e.preventDefault();
                            move(current_step + 1);
                        });

                        if (options.timer) {
                            el.on('mouseover', stop);
                            el.on('mouseleave', play);
                        }

                        // launch
                        resize();
                        if (options.timer) {
                            play();
                        }
                    }

                    function create_nav() {
                        slider_nav = $('<ul></ul>');
                        slider_nav.addClass('slider-nav');
                        create_nav_links();
                        el.append(slider_nav);
                    }

                    function create_nav_links() {
                        for (var i = 0; i < steps; i++) {
                            var li = $('<li></li>')
                            var nav_link = $('<a></a>');
                            nav_link.attr('href', '#');

                            nav_link.on('click', function(e) {
                                e.preventDefault();

                                var index = $(this).parent().index(),
                                    index_plus_1 = index + 1;

                                if (index_plus_1 > current_step) {
                                    move(index_plus_1);
                                } else {
                                    move(index_plus_1);
                                }
                            });

                            li.append(nav_link);
                            slider_nav.append(li);
                        }
                    }

                    function update_nav() {
                        var links_count = slider_nav.find('li a').length;
                        //                console.log(links_count);
                        if (links_count !== steps) {
                            slider_nav.empty();
                            create_nav_links();
                        }
                    }

                    function resize() {

                        // timer pour éviter les soucis pendant le redimensionnement et arrêter/ relancer la boucle
                        if (options.timer) {
                            stop();
                            clearTimeout(resizeTimer);
                            resizeTimer = setTimeout(function() {
                                play();
                            }, 250);
                        }

                        if (options.items > 1) {
                            responsive_slider();
                        } else {
                            // slider avec 1 seule image par étape
                            resize_slide();
                        }

                        // repositionnement du conteneur de slides sans animation
                        position_slides_container();

                        // affichage boutons (bon emplacement dans le cas ou on modifie le nombre d'items)
                        actualize_buttons();
                    }

                    function responsive_slider() {
                        // largeur du slider
                        var slider_width = el.outerWidth(true);

                        // small screens
                        if (slider_width < options.small_screen && options.items >= 2) {
                            // 2 items par étape
                            change_items_per_step_to(2);
                        } else if (slider_width < options.tablet && options.items >= 3) {
                            // 3 items par étape
                            change_items_per_step_to(3);
                        } else {
                            change_items_per_step_to(options.items);
                        }

                        resize_slide();
                        update_nav(items_per_step);
                    }

                    function change_items_per_step_to(new_items_per_step) {
                        items_per_step = new_items_per_step;

                        var new_steps = Math.ceil($slides_length / items_per_step);

                        if (new_steps != steps) {
                            // calcul du nombre de slides avant de modifier les steps
                            var old_current_step_slides_count = current_step == steps ?
                                $slides_length :
                                current_step * items_per_step;

                            // calcul du nouveau current step pour le nouveau nombre de steps
                            var new_current_step = old_current_step_slides_count == $slides_length ?
                                new_steps :
                                old_current_step_slides_count / items_per_step;

                            current_step = new_current_step;
                        }
                        steps = new_steps;
                    }

                    function resize_slide() {
                        // largeur du slider sans border et margin
                        var slider_width = el.width();
                        // calcul de la nouvelle largeur de chaque slide
                        var slide_width = slider_width / items_per_step;

                        // redimensionnement des slides
                        $slides.css({
                            width: slide_width + 'px'
                        });
                    }

                    function position_slides_container() {
                        var margin = parseInt($slides.css('margin-left')) + parseInt($slides.css('margin-right')),
                            slide_width = (el.width() / items_per_step) + margin;

                        var left = 0;
                        if (current_step == 1) {
                            left = 0;
                        } else if (current_step == steps) {
                            left = (($slides_length - (current_step * items_per_step)) + ((current_step - 1) * items_per_step)) * slide_width;
                        } else {
                            left = ((current_step - 1) * items_per_step) * slide_width;
                        }
                        $slides_container.css({
                            left: '-' + left + 'px'
                        });
                    }


                    function calc_slides_diff(from_step, to_step) {

                        // front
                        if (from_step < to_step) {
                            // to_step == steps ?
                            var slides_to_move = to_step == steps ?
                                $slides_length - (current_step * items_per_step) :
                                (to_step * items_per_step) - (current_step * items_per_step);

                            return slides_to_move;
                        }
                        // back
                        if (from_step > to_step) {

                            var slides_to_move = current_step == steps ?
                                $slides_length - (to_step * items_per_step) :
                                (current_step * items_per_step) - (to_step * items_per_step);

                            return slides_to_move;
                        }

                        // from == to ?
                        return 0;
                    }

                    function move(to_step) {
                        // calcul déplacement
                        var slides_to_move = calc_slides_diff(current_step, to_step);
                        // largeur du déplacement
                        var width = items_per_step > 1 ?
                            $slides.outerWidth(true) * slides_to_move:
                            $slides.outerWidth(true) * slides_to_move;


                        // déplacement selon la direction + animation
                        // front
                        if (current_step < to_step) {
                            $slides_container.animate({
                                left: '-=' + width + 'px'
                            }, options.animation_duration, options.easing);
                            current_step = to_step;
                        }
                        // back
                        if (current_step > to_step) {
                            $slides_container.animate({
                                left: '+=' + width + 'px'
                            }, options.animation_duration, options.easing);
                            current_step = to_step;
                        }
                        // si current_step == to_step pas de déplacement

                        // affichage des boutons
                        actualize_buttons();
                    }

                    function actualize_buttons() {

                        if (current_step <= 1) {
                            prev.hide();
                        } else {
                            prev.show();
                        }

                        if (current_step >= steps) {
                            next.hide();
                        } else {
                            next.show();
                        }

                        // navs
                        if (options.show_nav) {
                            var current_nav = slider_nav.find('a').eq(current_step - 1);
                            slider_nav.find('a').removeClass('active');
                            current_nav.addClass('active');
                        }
                    }

                    function play() {
                        clearInterval(timer);
                        timer = setInterval(function() {
                            if (current_step == steps) {
                                move(1);
                            } else {
                                move(current_step + 1);
                            }
                        }, options.interval);
                    }

                    function stop() {
                        clearInterval(timer);
                    }

                    initialize();
                });

            };

            $.fn.flexboxslider.defaults = {
                max_height:250,
                items:4,
                timer: true,
                interval: 5000,
                show_nav: true,
                animation_duration: 500,
                easing: 'swing',
                small_screen:600,
                tablet:768
            };


        })(jQuery);
        $(document).ready(function() {

            $('#slider-2').flexboxslider({
                max_height: 80,
                // items:3,
                timer: false
            });
        });
    </script>
{{--============script pop up item ============--}}
@endsection