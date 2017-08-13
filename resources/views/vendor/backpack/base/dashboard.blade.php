@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection

@section('header')
    <section class="content-header">
        <h1>
            {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
            <li class="active">{{ trans('backpack::base.dashboard') }}</li>
        </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>
                <!-- Main content -->
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
                        min-height: 20px !important;
                        padding: 15px;
                        margin-right: auto;
                        margin-left: auto;
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

                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-right">
                            <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                            <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                            <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- /.nav-tabs-custom -->
                </section>
                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
            </div>
        </div>
    </div>

@endsection
@section('graph_script')

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

    <script src="{{ asset('vendor/adminlte') }}/plugins/morris/morris.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('vendor/adminlte') }}/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="{{ asset('vendor/adminlte') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('vendor/adminlte') }}/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{{ asset('vendor/adminlte') }}/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('vendor/adminlte') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

    <script src="{{ asset('vendor/adminlte') }}/dist/js/pages/dashboard.js"></script>


@endsection