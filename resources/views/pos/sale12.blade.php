@extends('backpack::layout1')
@section('graph_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('pos') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/select2/select2.min.css">

@endsection

@section('content')
    <div id="pos">
        <form>
            <div id="leftdiv">
                {{--<img class="profile-user-img img-responsive img-circle" src="{{ asset('vendor/adminlte') }}/dist/img/user4-128x128.jpg" alt="User profile picture">--}}
                {{--<h3 class="profile-username text-center">Sale Management</h3>--}}
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
                                        <a href="#" id="search_details" data-toggle="modal" data-target="#searchProductFilterDetail">
                                            <i class="fa fa-2x fa-search" id="addIcon"></i>
                                        </a>
                                    </div>
                                    <div class="input-group-addon" style="padding: 2px 5px;">
                                        <a href="#" id="addManually" data-toggle="modal" data-target="#addProductManual">
                                            <i class="fa fa-2x fa-plus-circle" id="addIcon"></i>
                                        </a>
                                    </div>
                                    <div class="input-group-addon" style="padding: 2px 5px;">
                                        <a href="#" id="search_floor" data-toggle="modal" data-target="#searchProductFilter">
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
                {{--style="position: relative;"--}}
                <div id="print">
                    <div id="left-middle" style="height: 606px; min-height: 325px;">
                        <div id="product-list" style="height: 601px; min-height: 320px;">
                            <table class="table items table-striped table-bordered table-condensed table-hover" style="margin-bottom: 0;">
                                <thead>
                                <tr>
                                    <th width="3%">N<sup>o</sup></th>
                                    <th width="30%">Product</th>
                                    <th width="10%">Price</th>
                                    <th width="12%">Price (KHM)</th>
                                    <th width="10%">Qty</th>
                                    <th width="5%">Discount</th>
                                    <th width="13%">Subtotal</th>
                                    <th style="width: 5%; text-align: center;"><i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span>#1</span>
                                    </td>
                                    <td class="edit" style="cursor:pointer;">
                                        <ul class="enlarges">
                                            <li>
                                                <span class="sname" id="name_1502962312176">DESKTOP ASUS</span>
                                                <span class="showimg" style="width:350px;">
                                                    {{--<table class="table table-bordered">--}}
                                                        {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                            {{--<th>Image</th>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}
                                                            {{--<td>--}}
                                                                {{--<a href="#">--}}
                                                                    {{--<img src="" alt="DESKTOP ASUS" style="width:200px;" class="img-thumbnail">--}}
                                                                {{--</a>--}}
                                                            {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--</tbody>--}}
                                                    {{--</table>--}}
                                                </span>
                                                <i class="pull-right fa fa-edit tip pointer edit" title="Edit" style="cursor:pointer;"></i>
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-right sprice" id="sprice_1502962312176">520.00</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="price-kh">៛ 21,84,000</span>
                                    </td>
                                    <td>
                                        <input class="form-control kb-pad text-center rquantity" name="quantity[]" type="text" value="1" id="quantity_1502962312176" onclick="this.select();">
                                    </td>
                                    <td class="text-right">
                                        <input class="form-control kb-pad text-center sdiscount" type="text" value="0" onclick="this.select();">
                                    </td>
                                    <td class="text-right">
                                        <span class="text-right ssubtotal" id="subtotal_1502962312176">520.00
                                        </span>
                                    </td>
                                    <td class="text-center posdel" style="cursor:pointer;">
                                        <i class="fa fa-2x fa-times tip pointer posdel" id="1502962312176" title="Remove" style="cursor:pointer;"></i>
                                    </td>
                                </tr>
                            </table>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                    <div id="left-bottom">
                        <table id="totalTable" style="width:100%; float:right; padding:5px; color:#000; background: #FFF;">
                            <tbody>
                            <tr>
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
                                {{--<td style="padding: 5px 10px; font-size: 16px;">Order Tax--}}
                                {{--<a href="#" id="pptax2" data-toggle="modal" data-target="#taxModal">--}}
                                {{--<i class="fa fa-edit"></i>--}}
                                {{--</a>--}}
                                {{--</td>--}}
                                {{--<td class="text-right" style="padding: 5px 10px;font-size: 16px; font-weight:bold;">--}}
                                {{--<span id="ttax2">(0)0.00</span>--}}
                                {{--</td>--}}

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
                            </tbody>
                        </table>

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
            <div id="cp">
                <div id="cpinner" style="padding:0;">
                    <div class="quick-menu">
                        <div id="proContainer">
                            <div id="ajaxproducts">
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
                                <div id="item-list" style="height: 834px; min-height: 515px;">

                                    <div id="box-item">


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


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

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

    {{--<div class="modal fade" id="taxModal" tabindex="-1" role="dialog" aria-labelledby="taxModal" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-sm">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i></button>--}}
    {{--<h4 class="modal-title" id="txModalLabel">Edit Order Tax</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<div class="form-group">--}}
    {{--<label for="order_tax_input">Order Tax</label>--}}
    {{--<select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">--}}
    {{--<option selected="selected">No Tax</option>--}}
    {{--<option>VAT @10%</option>--}}
    {{--<option>GST @6%</option>--}}
    {{--<option>VAT @20%</option>--}}
    {{--<option>TAX @10%</option>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--<button type="button" id="updateOrderTax" class="btn btn-primary">Update</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="modal fade" id="viewCustomerModal" tabindex="-1" role="dialog" aria-labelledby="viewCustomerModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa fa-2x">×</i>
                    </button>
                    <button type="button" class="btn btn-primary btn-xs no-print pull-right " onclick="window.print()">
                        <i class="fa fa-print"></i>&nbsp;Print			</button>
                    <h4 class="modal-title" id="myModalLabel">Mengeang</h4>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="margin-bottom:0;">
                            <tbody>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td>Mengeang</td>
                            </tr>
                            <tr>
                                <td><strong>Customer Group</strong></td>
                                <td>General</td>
                            </tr>
                            <tr>
                                <td><strong>Phone</strong></td>
                                <td>012 222 333</td>
                            </tr>
                            <tr>
                                <td><strong>Note</strong></td>
                                <td>40Eo, st.70B </td>
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
                <form action="#" data-toggle="validator" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="novalidate" class="bv-form">

                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                    <input type="hidden" name="token" value="" style="display:none;">
                    <div class="modal-body">
                        <p>Please fill in the information below. The field labels marked with * are required input fields.</p>

                        <div class="form-group has-feedback">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group person has-feedback">
                                        <label for="name">Name *</label>
                                        <input type="text" name="name" value="Mengeang" class="form-control tip" id="name" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Gender *</label>
                                        <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                            <option value="" selected="selected">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone *</label>
                                        <input type="tel" name="phone" class="form-control" id="phone" value="012 222 333">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label for="address">Note</label>
                                        <textarea name="sale_note" cols="40" rows="10" id="sale_note"
                                                  class="form-control kb-text skip" style="height: 181px;" placeholder="Customer Note"
                                                  maxlength="250">

                                        </textarea>
                                    </div>
                                </div>
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

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group person has-feedback">
                                    <label for="name">Name *</label>
                                    <input type="text" name="name" value="" class="form-control tip" id="name">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="phone">Phone *</label>
                                    <input type="text" name="phone" value="" class="form-control" id="phone">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="price_group">Gender</label>
                                    <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="address">Note</label>
                                    <textarea name="sale_note" cols="40" rows="10" id="sale_note"
                                              class="form-control kb-text skip" style="height: 181px;" placeholder="Customer Note"
                                              maxlength="250">
                                    </textarea>
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

    <div class="modal fade" id="addProductManual" tabindex="-1" role="dialog" aria-labelledby="addProductManual" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">×</i></span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="mModalLabel">Add Product Manually</h4>
                </div>
                <div class="modal-body" id="pr_popover_content">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="mcode" class="col-sm-4 control-label">Product Code *</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-text" id="mcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mname" class="col-sm-4 control-label">Product Name *</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-text" id="mname">
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                        {{--<label for="mtax" class="col-sm-4 control-label">Product Tax *</label>--}}

                        {{--<div class="col-sm-8">--}}
                        {{--<select class="form-control">--}}
                        {{--<option selected="selected">No Tax</option>--}}
                        {{--<option>VAT @10%</option>--}}
                        {{--<option>GST @6%</option>--}}
                        {{--<option>VAT @20%</option>--}}
                        {{--<option>TAX @10%</option>--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="mquantity" class="col-sm-4 control-label">Quantity *</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-pad" id="mquantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mdiscount" class="col-sm-4 control-label">Product Discount</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-pad" id="mdiscount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mprice" class="col-sm-4 control-label">Unit Price *</label>

                            <div class="col-sm-8">
                                <input type="text" class="form-control kb-pad" id="mprice">
                            </div>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody><tr>
                                <th style="width:25%;">Net Unit Price</th>
                                <th style="width:25%;"><span id="mnet_price">0.00</span></th>
                                <th style="width:25%;">Product Tax</th>
                                <th style="width:25%;"><span id="mpro_tax">0.00</span></th>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addItemManually">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="searchProductFilter" tabindex="-1" role="dialog" aria-labelledby="searchProductFilter" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">
                           <i class="fa fa-2x">×</i></span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="prModalLabel">Search Filter</h4>
                </div>
                <div class="modal-body scroll_F ps-container" id="pr_popover_content" style="height:300px;overflow:hidden;">
                    <form class="form-horizontal" role="form" id="s_seModal">
                        <table>
                            <thead>
                            <tr>
                                <td style="padding:0;margin:0;border:1px;">
                                    <input type="text" style="width:184px;border-right:none" class="form-control ui-autocomplete-input" id="fcode" autocomplete="off"></td>
                                <td style="padding:0;margin:0;border:1px;">
                                    <input type="text" style="width:239px;border-right:none" class="form-control ui-autocomplete-input" id="fdescription" autocomplete="off"></td>
                                <td style="padding:0;margin:0;border:1px;">
                                    <input type="text" style="width:145px;" class="form-control ui-autocomplete-input" id="ffloor" autocomplete="off"></td>
                            </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width:45px;"></th>
                                <th>Code</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Floor</th>
                            </tr>
                            </thead>
                            <tbody class="floor">

                            </tbody>
                        </table>
                    </form>
                    <div class="ps-scrollbar-x-rail" style="width: 0px; display: none; left: 0px; bottom: 3px;">
                        <div class="ps-scrollbar-x" style="left: -30px; width: 0px;">

                        </div>
                    </div>
                    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 270px; display: none; right: 3px;">
                        <div class="ps-scrollbar-y" style="top: 0px; height: 0px;">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addSearch">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="searchProductFilterDetail" tabindex="-1" role="dialog" aria-labelledby="searchProductFilterDetail" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-2x">×</i></span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="prModalLabel">Search Filter</h4>
                </div>
                <div class="modal-body scroll_F ps-container" id="pr_popover_content" style="height:400px;overflow:hidden;">
                    <form class="form-horizontal" role="form" id="s_seModal">
                        <table>
                            <thead>
                            <tr>
                                <td style="border:1px;width:5%"><input type="text" class="form-control" id="chk" disabled=""></td>
                                <td style="padding:0;margin:0;border:1px;width:20%"><input type="text" class="form-control ui-autocomplete-input" id="Pcode" autocomplete="off"></td>
                                <td style="padding:0;margin:0;border:1px;width:25%"><input type="text" class="form-control ui-autocomplete-input" id="Pname" autocomplete="off"></td>
                                <!--<td style="padding:0;margin:0;border:1px;"><input type="text" style="width:113px;border-right:none" class="form-control" id="Pdescription" /></td>-->
                                <td style="padding:0;margin:0;border:1px;width:20%"><input type="text" class="form-control ui-autocomplete-input" id="Pcategory" autocomplete="off"></td>
                                <td style="padding:0;margin:0;border:1px;width:10%"><input type="text" class="form-control ui-autocomplete-input" id="Pprice" autocomplete="off"></td>
                                <td style="padding:0;margin:0;border:1px;width:20%"><input type="text" class="form-control" id="dd" disabled=""></td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="width:5%;">
                                    <center>
                                        <input class="checkbox checkth input-xs" type="checkbox" name="check">
                                    </center>
                                </th>
                                <th style="width:20%">Product Code</th>
                                <th style="width:25%">Product Name</th>
                                <!--<th style="width:104px">Description</th>-->
                                <th style="width:20%">Category</th>
                                <th style="width:10%">Price</th>
                                <!--<th style="width:200px">strap</th>-->
                                <th style="width:20px"><i class="fa fa-chain"></i></th>
                            </tr>
                            </thead>
                            <tbody class="test">

                            </tbody>
                        </table>
                    </form>
                    <div class="ps-scrollbar-x-rail" style="width: 0px; display: none; left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" style="left: -30px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 370px; display: none; right: 3px;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="addItem">Submit</button>
                </div>
            </div>
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
                                            <label for="saleman">Customer Name</label>
                                            <input type="text" name="date" value="Mengeang" readonly class="form-control input-tip">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="date">Date</label> (yyyy-mm-dd)
                                        <input type="text" name="date" value="2017-08-15 10:22:12" class="form-control input-tip datetime" id="date" data-original-title="" title="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <textarea readonly name="customer_note" cols="40" rows="10" id="sale_note"
                                                  class="form-control kb-text skip" style="height: 60px;"
                                                  maxlength="250">customer not detial
                                        </textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="slref">Reference No</label>
                                        <input type="text" name="date" value="SALE/POS/1708/00008" class="form-control input-tip datetime" id="date" data-original-title="" title="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary col-md-12 addButton">
                                            <i class="fa fa-plus"></i> Add More Payments
                                        </button>
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
                                            <div class="col-sm-12">
                                                <textarea name="payment_note[]" id="payment_note_1" style="height: 60px;" class="pa form-control kb-text payment_note" placeholder="Payment Note"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{--=========================admin more payment==============--}}
                            <div id="multi-payment">
                                <button type="button" class="close close-payment" style="margin: -10px 0px 0 0;"><i class="fa fa-2x">×</i></button>
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
                                                <td class="text-right"><span id="item_count">2</span></td>
                                                <td class="text-right"><span class="item_count">2</span></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="height: 50px;">Total Payable</td>
                                                <td class="text-right"><span id="twt">1,080.00</span></td>
                                                <td class="text-right"><span class="curr_tpay" rate="4200.0000" id="twt">4536000</span></td>
                                            </tr>
                                            <tr>
                                                <td width="50%" style="height: 50px;">Paid </td>
                                                <td class="text-right"><input name="amount[]" type="text" id="amount_2" class="pa form-control input-lg kb-pad amount" style="text-align:right;"></td>
                                                <td class="text-right">
                                                    <input name="other_cur_paid[]" rate="4200.0000" type="text" id="other_cur_paid" class="form-control input-lg kb-pad currencies_payment" style="text-align:right;">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td rowspan="2" width="50%" style="text-align:left;">Remaining</td>
                                                <td class="text-right"><span id="remain_2" class="main_remain_2">0.00</span></td>
                                                <td class="text-right"><span class="curr_remain_2" rate="4200.0000" id="remain_2">0</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span id="remain" class="main_remain">0.00</span></td>
                                                <td class="text-right"><span class="curr_remain" rate="4200.0000" id="remain">0</span></td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" width="50%" style="text-align:left;">Change</td>
                                                <td class="text-right"><span id="change_2">0.00</span></td>
                                                <td class="text-right"><span class="curr_change_2" rate="4200.0000" id="change_2">0</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><span id="change">27,920.00</span></td>
                                                <td class="text-right"><span class="curr_change" rate="4200.0000" id="change">41664000</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="well well-sm well_2">
                                    <div class="payment">
                                        <div class="row" style="font-size: 1.2em; font-weight: bold; margin-bottom: 0;">
                                            <div class="col-sm-12">
                                                <textarea name="payment_note[]" id="payment_note_1" style="height: 60px;" class="pa form-control kb-text payment_note" placeholder="Payment Note"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <button type="button" class="btn btn-lg btn-warning quick-cash">500</button>
                                <button type="button" class="btn btn-lg btn-warning quick-cash">1000</button>
                                <button type="button" class="btn btn-lg btn-warning quick-cash">5000</button>
                                <button type="button" class="btn btn-lg btn-danger" id="clear-cash-notes">Clear</button>
                                <hr>
                                <div class="btn-group">
                                    <button onclick="location.href='{{url('admin/invoice')}}'" type="button" style="font-size: 1.2em; font-weight: bold; height:80px;" class="btn btn-success" id="submit-sale">
                                        <i class="fa fa-money"></i>
                                        Save
                                    </button>
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