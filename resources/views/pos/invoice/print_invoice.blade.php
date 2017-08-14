@extends('backpack::layout')
@section('graph_style')
@endsection

{{--@section('header')--}}
    {{--<section class="content-header">--}}
        {{--<h1>--}}
            {{--{{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>--}}
        {{--</h1>--}}
        {{--<ol class="breadcrumb">--}}
            {{--<li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>--}}
            {{--<li class="active">{{ trans('backpack::base.dashboard') }}</li>--}}
        {{--</ol>--}}
    {{--</section>--}}
{{--@endsection--}}


@section('content')
    <div class="row">
        <div id="content" class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/">Home</a></li><li class="active">invoice devery</li>
                        <li class="right_log hidden-xs">
                            Your IP Address 103.14.250.43 <span class="hidden-sm">( Last login at: 14/08/2017 08:16 IP: 42.115.126.65 )</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="alerts"></div>


                    <title>RULE</title>
                    <meta charset="utf-8">
                    <style>
                        @media print{

                            #tb tr th{
                                background-color: #DCDCDC !important;
                            }
                            #body{
                                width:1000px;
                                height:100%;
                                margin:0 auto;
                                background:#fff !important;
                            }
                            #print{
                                display:none;
                            }
                            #foot{
                                width:100%;
                                background:#fff !important;
                            }
                            .fon{
                                color: rgba(0, 0, 0, 0.3) !important;
                            }
                            .left_ch{
                                left: 80px !important;
                            }
                        }
                        #print{

                            width:60px;
                            height:45px;
                            border:0px;
                            background: #4169E1;
                            color:#fff;
                            cursor:pointer;
                            -webkit-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
                            -moz-box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
                            box-shadow: 0px 4px 5px 0px rgba(0,0,0,0.75);
                        }
                        #body,h2,h3,h4,h5,p{
                            margin:0px;
                            padding:5px;

                        }

                        #body{
                            width:95%;
                            height:100%;
                            margin:0 auto;
                            background:#F0F8FF;


                        }


                        #top{
                            width:95%;
                            height:100px;
                            margin:0 auto;

                            padding-top:20px;
                        }
                        #top_l{
                            width:220px;
                            float:left;
                        }
                        #top_r{
                            width:200px;
                            float:right;
                            text-align:center;
                        }
                        h1,h2,h3,h4{
                            font-family:"Khmer OS Muol";
                        }

                        p{
                            font-size:15px;
                            font-family:"Arial Narrow";
                        }
                        #top2{
                            width:95%;
                            margin:0 auto;
                            text-align:center;
                            height:170px;

                            margin-bottom:10px;
                        }
                        #top2_l{
                            width:30%;
                            margin:0 auto;
                            text-align:left;

                            float:left;
                            height:150px;
                        }
                        #top2_c{
                            width:30%;
                            margin:0 auto;
                            text-align:center;
                            height:150px;

                            float:left;
                        }
                        #top2_r{
                            width:30%;
                            margin:0 auto;
                            text-align:left;

                            float:left;
                            height:210px;
                        }
                        #top2 h5{
                            font-family:"Khmer OS Muol";
                        }
                        #tb tr th{
                            font-size:16px;
                            padding:5px;
                            font-family:"Arial Narrow";
                            font-weight: bold;
                        }
                        #tb tr td{
                            font-size:15px;
                            padding:4px;
                            font-family:"Arial Narrow";
                        }
                        #tb {
                            width:98%;
                            margin:0 auto;
                        }
                        #foot{
                            width:100%;
                            height:150px;
                            background:#F0F8FF;
                        }
                        #tb2 tr td,#tb3 tr td{
                            font-size:15px;
                            border-radius:20px;
                            font-family:"Arial Narrow";
                            text-align:left;
                            padding-left:10px;
                        }

                    </style>

<style>
    .style-print{
        color: #fff;
        font-size: 28px;
    }
</style>

                    <div id="body">
                        <button id="print" onclick="window.print()">
                            <i class="fa fa-fw fa-print style-print"></i>
                        </button>
                        <!--<div class="left_ch" style="
                        width:700px;
                        text-align:center;
                         position: absolute;
                    left: 300px;
                    top: 580px;
                        z-index:1;
                    -webkit-transform: rotate(350deg);
                -moz-transform: rotate(350deg);
                -o-transform: rotate(350deg);
                writing-mode: lr-tb;
                        ">
                            <span class="fon" style="font-size:40px;font-family:Khmer OS;
                color: rgba(0, 0, 0, 0.3);
                            " >វិក័យប័ត្រនេះមិនអាចប្រកាសជា<br>បន្ទុកចំណាយបានទេ</span>
                        </div>-->

                        <div id="top2">
                            <!--<h1>ខេ អិន អិន លក់ រថយន្ដ និង គ្រឿងចក្រ</h1>
                            <h1>KNN Cambodia Co., Ltd (KNN Group)</h1>-->

                            <h1><b>DEBIT NOTE</b></h1>

                            <br>
                            <div style="float:left; width:50%;border-radius: 10px 10px 10px 10px;
                            -moz-border-radius: 10px 10px 10px 10px;
                            -webkit-border-radius: 10px 10px 10px 10px;
                            border: 1px solid #000000;">
                                <table id="tb2" style=" width:100%;">
                                    <tbody><tr>
                                        <td>Bill To</td>
                                        <td>: Samet</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>: 40Eo, st.70B</td>
                                    </tr>
                                    <tr>
                                        <td>Att</td>
                                        <td>: Own Owner</td>
                                    </tr>
                                    <tr>
                                        <td>HP</td>
                                        <td>: 012 222 333</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>: poro@gmail.com</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <div style="float:right; width:40%;border-radius: 10px 10px 10px 10px;
-moz-border-radius: 10px 10px 10px 10px;
-webkit-border-radius: 10px 10px 10px 10px;
border: 1px solid #000000;">
                                <table id="tb3" style=" width:100%;">
                                    <tbody><tr>
                                        <td>No.</td>
                                        <td>: SALE/POS/1708/00005</td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td>: 14/08/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Ref DO No</td>
                                        <td>: </td>
                                    </tr>
                                    <!--<tr>
                                        <td>VAT</td>
                                        <td>:  </td>
                                    </tr>
                                    <tr>
                                        <td>Division</td>
                                        <td>: </td>
                                    </tr>-->
                                    </tbody></table>
                            </div>

                        </div>

                        <table id="tb" style="border-collapse: collapse;text-align:center;" border="1">
                            <tbody><tr>
                                <th style="text-align:center;">Item</th>
                                <th style="text-align:center;">Description</th>
                                <th style="text-align:center;">Unit</th>
                                <th style="text-align:center;">Qty</th>
                                <th style="text-align:center;width:150px;">Unit Price</th>
                                <th style="text-align:center;">Amount</th>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>DESTOP Acer</td>
                                <td style="text-align:left;">Unit</td>
                                <td>1.00</td>
                                <td>460.00 </td>
                                <td style="text-align:right;">460.00 $</td>


                            </tr>
                            <tr>
                                <td>2</td>
                                <td>iphone 6 black</td>
                                <td style="text-align:left;">Unit</td>
                                <td>1.00</td>
                                <td>300.00 </td>
                                <td style="text-align:right;">300.00 $</td>


                            </tr>
                            <tr class="blank">
                                <td>3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right;">$</td>
                            </tr>

                            <tr class="blank">
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right;">$</td>
                            </tr>

                            <tr class="blank">
                                <td>5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right;">$</td>
                            </tr>

                            <tr class="blank">
                                <td>6</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right;">$</td>
                            </tr>

                            <tr class="blank">
                                <td>7</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right;">$</td>
                            </tr>

                            <tr class="blank">
                                <td>8</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right;">$</td>
                            </tr>

                            <tr class="blank">
                                <td>9</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right;">$</td>
                            </tr>

                            <tr>


                                <td colspan="5" style="text-align:right;"> Sub Total</td>

                                <td style="text-align:right;">760.00 $</td>

                            </tr>
                            <tr>
                                <td colspan="5" style="text-align:right;">Special Discount </td>
                                <td style="text-align:right;">0.00 $</td>

                            </tr>
                            <tr>
                                <td colspan="5" &#8203;="" style="text-align:right;">Total amount w/o (USD)</td>
                                <td style="text-align:right;">760.00 $</td>

                            </tr>

                            </tbody></table>
                        <p>Total Amount inword: seven hundred and sixty</p>
                        <p>Term of Payment: COD</p>
                        <p></p>
                        <h5><u>Bank Detail:</u></h5>
                        <p>&nbsp;&nbsp;&nbsp;Name: ..............</p>
                        <p>&nbsp;&nbsp;&nbsp;Acct Number: ..............</p>
                        <br>
                        <div id="foot">
                            <div id="top2_l">

                                <p>Prepared By :</p>
                                <br><br><br><br>
                                <p><b>SOM CHANDAVY</b></p>
                                <p>Finance &amp; Admin Manager</p>
                            </div>

                            <!--<div id="top2_c">
                                <p>បានពិនិត្យ ត្រឹមត្រូវ</p>
                                <p>ប្រធានការិយាល័យគណនេយ្យ</p>
                            </div>
                            <div id="top2_c">
                                <p>អ្នកគ្រប់គ្រងស្ដុក</p>

                            </div>-->
                            <div id="top2_c">
                                <!--<p>អនុម័តដោយ</p>
                                    <p>Approved By :</p>-->

                            </div>
                            <div id="top2_r">

                                <p>Acknowledged By:</p>
                                <br><br><br><br>
                                <p>Customer`s Name:</p>
                                <p>Date: ............./.............../.................</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>
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
