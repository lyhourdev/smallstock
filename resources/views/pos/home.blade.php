@extends('backpack::layout2')

@section('content')
    <link rel="stylesheet" href="{{ asset('pos/') }}/css/style.css">
    <style>
        .bg-size{
            text-align: center; padding: 5px;
        }
        .fon-size{
            font-size: 26px;

        }
        .col-md-12, .col-md-2,.col-sm-4, .col-xs-6{
            position: relative;
            min-height: 1px;
            padding-right: 5px !important;
            padding-left: 5px !important;
        }
        .content {
            margin-right: 10%;
            margin-left: 10%;
            margin-top: 10%;
        }
    </style>
    <section class="content">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="info-box bg-aqua">
                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/sale.png')}}"></i>
                                    </span>
                        <br>
                        <span class="fon-size" style=""><b>Sale</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="info-box bg-green">
                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/purchase.png')}}"></i>
                                    </span>
                        <br>
                        <span class="fon-size"><b>Purchase</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="info-box bg-red">
                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/stock-in.png')}}"></i>
                                    </span>
                        <br>
                        <span class="fon-size"><b>Open Stock</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="info-box bg-red">
                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/check.png')}}"></i>
                                    </span>
                        <br>
                        <span class="fon-size"><b>Check List</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="info-box bg-red">
                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/customer.png')}}"></i>
                                    </span>
                        <br>
                        <span class="fon-size"><b>Customer</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
                <div class="info-box bg-yellow">
                    <div class="bg-size">
                                    <span>
                                        <i><img width="60" height="60" src="{{asset('pos/icon/report.png')}}"></i>
                                    </span>
                        <br>
                        <span class="fon-size"><b>Report</b></span>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


