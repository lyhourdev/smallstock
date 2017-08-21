@extends('backpack::layout1')
@section('graph_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte') }}/plugins/select2/select2.min.css">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            border: 0;
        }

        a {
            display: inline-block;
            padding: 1em;
            text-decoration: none;
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            /*border-radius: 0 0px 0px 0;*/
        }

        #A,
        #B {
            position: absolute;
            transition: all 500ms;
        }

        #A {
            top: 0px;
            width: 200px;
            bottom: 0px;
            background: #EEEEEE;
        }

        #B {
            top: 0px;
            left: 200px;
            right: 0;
            bottom: 0px;
            background: #ffffff;
        }

        #toggle {
            display: none;
            /*Hide the checkbox*/
        }

        label {
            position: relative;
            left: 200px;
            /*Set the left position to the same as the sidebar */

            top: 1px;
            /*margin: 1px;*/
            z-index: 2;
            transition: all 500ms;
            padding: 2px 2px 2px 2px;
            background: #ffff;
        }
        /*move both containers on toggle*/

        #toggle:checked ~ #A,
        #toggle:checked ~ #B {
            left: -200px;
        }
        /*move label to follow sidebar animation*/

        #toggle:checked,
        #toggle:checked ~ label {
            left: 0;
            background: #FFF;
        }
        /* Non-checked initial state */

        #toggle ~ #A {
            left: 0;
        }
    </style>
@endsection
@section('hearder-report')
    <br>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-2 "></div>
        <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: right !important;">
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-4 col-sm-4 col-xs-4 control-label">DATE FROM : </div>

                <div class="col-md-8 col-sm-8 col-xs-8 input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6" style="text-align: left !important;">
            <div class="form-group col-md-12 col-xs-12" style="text-align: left !important;">
                <div class="col-md-4 col-sm-4 col-xs-4 control-label"> TO DATE : </div>
                <div class="col-md-8 col-sm-8 col-xs-8 input-group date" style="text-align: left !important;">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <div class="col-md-2 "></div>
    </div>
@endsection
@section('content')

        <div id="A">
            <aside >
                <section class="sidebar" style="height: auto; margin-top: 72px;">
                    <ul class="sidebar-menu">
                        <li class="header">ADMINISTRATION</li>
                        <li><a href="http://localhost:8080/smallstock-new/public/admin/dashboard">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li><a href="http://localhost:8080/smallstock-new/public/admin/elfinder">
                                <i class="fa fa-files-o"></i>
                                <span>File manager</span></a>
                        </li>
                        <li><a href="http://localhost:8080/smallstock-new/public/admin/sale">
                                <i class="fa fa-fw fa-desktop"></i>
                                <span>POS</span></a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-university"></i>
                                <span>Item</span>
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://localhost:8080/smallstock-new/public/admin/item-category">
                                        <i class="fa fa-list"></i>
                                        <span>Item Category</span>
                                    </a>
                                </li>
                                <li><a href="http://localhost:8080/smallstock-new/public/admin/items">
                                        <i class="fa fa-fw fa-diamond"></i>
                                        <span>Item</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="http://localhost:8080/smallstock-new/public/admin/open-items">
                                <i class="fa fa-fw fa-book"></i>
                                <span>Open Item</span>
                            </a>
                        </li>
                        <li class=""><a href="http://localhost:8080/smallstock-new/public/admin/purchase">
                                <i class="fa fa-fw fa-cart-arrow-down"></i>
                                <span>Purchase</span>
                            </a>
                        </li>
                        <li><a href="http://localhost:8080/smallstock-new/public/admin/production">
                                <i class="fa fa-fw fa-gavel"></i>
                                <span>Production</span>
                            </a>
                        </li>

                        <li><a href="http://localhost:8080/smallstock-new/public/admin/invoices">
                                <i class="fa fa-fw fa-file-excel-o"></i>
                                <span>Invoice</span>
                            </a>
                        </li>

                    </ul>
                </section>
            </aside>
        </div>
        <input id="toggle" type="checkbox">
        <label for="toggle"><i style="color: #337AB7" class="fa fa-navicon fa-2x"></i></label>
            <div id="B">

            </div>



@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/select2/select2.full.min.js"></script>
    <script>
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
    </script>
@endsection