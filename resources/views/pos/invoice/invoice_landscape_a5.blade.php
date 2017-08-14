<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>INVOICE Landscapt :POS</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            font-family: Times New Roman !important;
            font-size: 14px;
        }
        .panel-default {
            border-radius: 0;
            border: 1px solid #000;
        }

        .panel-body {
            padding: 5px;
        }

        .panel-footer {
            padding: 10px;
            background-color: #FFF !important;
            border-top: 1px solid #000;
        }

        .table thead > tr > th, .table tbody > tr > th, .table tfoot > tr > th, .table thead > tr > td, .table tbody > tr > td, .table tfoot > tr > td { border: 1px solid #000 !important;}

        hr {
            border-top: 1px solid #000;
        }

    </style>
</head>
<body>
<center>
    <div class="row" style="padding:5px; padding-left:10px; padding-right:10px;">

        <div class="col-sm-6">

            <div class="row">

                <div class="col-sm-4 col-md-4 col-xs-4">
                    <img src="{{asset('/pos/img/logo.jpg')}}" width="150" height="150"  style="margin-top: 20px;" />
                </div>

                <div class="col-sm-4 col-md-4 col-xs-4" style="padding-top: 20px;">
                    <h3>INVOICE</h3>
                </div>

                <div class="col-sm-4 col-md-4 col-xs-4" style="padding-top: 30px;">
					<span>
                        <h4>INVOICE Nº: SALE/POS/1708/00005</h4>
													{{--<img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/barcode1.png"--}}
                                                         {{--alt="SALE/POS/1708/00005" style="height:30px"/>--}}
					</span>
                </div>

            </div>

            <div class="row" style="padding-left: 16px; padding-top: 20px;">
                <div class="col-sm-4">
                    <p align="left">Date: 14/08/2017 08:32</p>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <p align="left">No: SALE/POS/1708/00005</p>
                </div>
            </div>

            <div class="row" style="padding-left: 16px; padding-top: 5px;">

                <div class="col-sm-5 col-md-5 col-xs-5">

                    <div class="panel panel-default" style="margin-right: 20px;">
                        <div class="panel-body">Customer</div>
                        <div class="panel-footer" style="backgroud-color: #FFF !important;">
                            <table width="100%">
                                <tr style="line-height: 40px;">
                                    <td>Name</td>
                                    <td>:&nbsp;Chanthy</td>
                                </tr>
                                <tr>
                                    <td>Tel</td>
                                    <td>:&nbsp;012 222 333</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>

                <div class="col-sm-2 col-md-2 col-xs-2"></div>

                <div class="col-sm-5 col-md-5 col-xs-5">

                    <div class="panel panel-default" style="margin-right: 16px;">
                        <div class="panel-footer" style="backgroud-color: #FFF !important; border-top: none;">
                            <table width="100%">
                                <tr style="line-height: 40px;">
                                    <td>Email</td>
                                    <td>:&nbsp;chinroo@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Tel</td>
                                    <td>:&nbsp;</td>
                                </tr>
                                <tr style="line-height: 40px;">
                                    <td>Website</td>
                                    <td>:&nbsp;beautyplus.asia</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>

            </div>

            <table class="table-responsive" width="95%" border="0" cellspacing="0">
                <tr>
                    <td colspan="2">
                        <div class="table-responsive">
                            <table class="table table-bordered print-table order-table" style="'font-family:Khmer OS'; font-size:10px;">

                                <thead>

                                <tr>
                                    <th style="text-align:center;">Nº</th>
                                    <th style="text-align:center;">Item Code</th>
                                    <th style="text-align:center;">Description</th>
                                    <th style="text-align:center;">Quantity</th>
                                    <th style="text-align:center;">Price</th>
                                    <th style="text-align:center;">Amount</th>
                                </tr>

                                </thead>

                                <tbody>

                                <tr>
                                    <td class="tborder" style="border-bottom: 1px solid #FFF !important;text-align:center; width:40px; vertical-align:middle;">1</td>
                                    <td class="tborder" style="vertical-align:middle; border-bottom: 1px solid #FFF !important;">
                                        DS-0003											</td>
                                    <td class="tborder" style="width: 100px; text-align:center; vertical-align:middle; border-bottom: 1px solid #FFF !important;">
                                        <img src="{{asset('/pos/img/logo.jpg')}}" width="90" height="90" />
                                    </td>
                                    <td class="tborder" style="width: 80px; text-align:center; vertical-align:middle; border-bottom: 1px solid #FFF !important;">1.00</td>
                                    <!-- <td style="text-align:right; width:100px;">460.00</td> -->
                                    <td class="tborder" style="text-align:center; width:100px; border-bottom: 1px solid #FFF !important;">460.00</td>
                                    <td class="tborder" style="text-align:right; width:120px; border-bottom: 1px solid #FFF !important;">460.00</td>
                                </tr>

                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px;'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>

                                </tr>
                                </tbody>
                                <tfoot>



                                <tr>
                                    <td colspan="4"rowspan="3" style="border-left: 1px solid #fff !important; border-right: 1px solid #fff !important; border-bottom: 1px solid #fff !important;">
                                        <p><strong>Note:</strong>&nbsp;All items cannot be returned in cash.</p>
                                    </td>
                                    <td
                                            style="text-align:right; font-weight:bold; border-bottom:1px solid #fff !important; border-left: 1px solid #fff !important;">Total								</td>
                                    <td style="text-align:right; padding-right:10px; font-weight:bold; padding-top:5px;">760.00</td>


                                </tr>





                                <tr>
                                    <td
                                            style="text-align:right; font-weight:bold; border-bottom:1px solid #fff !important; border-left: 1px solid #fff !important;">Paid								</td>
                                    <td style="text-align:right; font-weight:bold; padding-top:5px;">760.00</td>
                                </tr>
                                <tr>
                                    <td
                                            style="text-align:right; font-weight:bold; border-bottom:1px solid #fff !important; border-left: 1px solid #fff !important;">Balance								</td>
                                    <td style="text-align:right; font-weight:bold; padding-top:5px;">0.00</td>
                                </tr>

                                </tfoot>
                            </table>
                        </div>
                    </td>
                </tr>

                <!--<tr>
                    <td colspan="2">
                        <table border="0" cellspacing="0">
                            <tr>
                                <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:70px;">
                                    <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important;  margin-bottom:2px;" />
                                    <b style="font-size:10px;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​​អតិថិជន​  <br/> Customer`s Signature & Name</b>
                                </td><td>&nbsp;</td><td>&nbsp;</td>
                                <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">

                                </td><td>&nbsp;</td><td>&nbsp;</td>
                                <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:70px;">
                                    <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important; margin-bottom:2px;" />
                                    <b style="font-size:10px;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​អ្នក​ទទួល​  <br/> Receiver`s Signature & Name</b>
                                </td>
                            </tr>
                        </table>

                        <div class="row" style="padding-top: 20px;">
                            <div class="col-sm-2">
                                <p style="font-size: 10px !important;">សូមអរគុណ<br>Thank you</p>
                            </div>
                        </div>

                    </td>
                </tr>-->
            </table>
            <div class="row" style="padding-left: 16px; margin-top:20px; width: 90%">

                <div class="col-sm-3" style="line-height:0px;">
                    <hr>
                    Customer Sig'
                </div>

                <div class="col-sm-3" style="line-height:0px;">
                    <hr>
                    Delivery By
                </div>

                <div class="col-sm-3" style="line-height:0px;">
                    <hr>
                    Receiver`s
                </div>

                <div class="col-sm-3">
                    <p style="padding-top: 30px;">Thanks</p>
                </div>

            </div>
        </div>

        <div class="col-sm-6">

            <div class="row">

                <div class="col-sm-4 col-md-4 col-xs-4">
                    <img src="{{asset('/pos/img/logo.jpg')}}" width="150" height="150"  style="margin-top: 20px;" />
                </div>

                <div class="col-sm-4 col-md-4 col-xs-4" style="padding-top: 20px;">
                    <h3>INVOICE</h3>
                </div>

                <div class="col-sm-4 col-md-4 col-xs-4" style="padding-top: 30px;">
					<span>
                        <h4>INVOICE Nº: SALE/POS/1708/00005</h4>
                            {{--<img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/barcode1.png"--}}
                                 {{--alt="SALE/POS/1708/00005" style="height:30px"/>--}}
                    </span>
                </div>

            </div>

            <div class="row" style="padding-left: 16px; padding-top: 20px;">
                <div class="col-sm-4">
                    <p align="left">Date: 14/08/2017 08:32</p>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <p align="left">No: SALE/POS/1708/00005</p>
                </div>
            </div>

            <div class="row" style="padding-left: 16px; padding-top: 5px;">

                <div class="col-sm-5 col-md-5 col-xs-5">

                    <div class="panel panel-default" style="margin-right: 20px;">
                        <div class="panel-body">Customer</div>
                        <div class="panel-footer" style="backgroud-color: #FFF !important;">
                            <table width="100%">
                                <tr style="line-height: 40px;">
                                    <td>Name</td>
                                    <td>:&nbsp;Chanthy</td>
                                </tr>
                                <tr>
                                    <td>Tel</td>
                                    <td>:&nbsp;012 222 333</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>

                <div class="col-sm-2 col-md-2 col-xs-2"></div>

                <div class="col-sm-5 col-md-5 col-xs-5">

                    <div class="panel panel-default" style="margin-right: 16px;">
                        <div class="panel-footer" style="backgroud-color: #FFF !important; border-top: none;">
                            <table width="100%">
                                <tr style="line-height: 40px;">
                                    <td>Email</td>
                                    <td>:&nbsp;chinroo@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Tel</td>
                                    <td>:&nbsp;</td>
                                </tr>
                                <tr style="line-height: 40px;">
                                    <td>Website</td>
                                    <td>:&nbsp;beautyplus.asia</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>

            </div>

            <table class="table-responsive" width="95%" border="0" cellspacing="0">
                <tr>
                    <td colspan="2">
                        <div class="table-responsive">
                            <table class="table table-bordered print-table order-table" style="'font-family:Khmer OS'; font-size:10px;">

                                <thead>

                                <tr>
                                    <th style="text-align:center;">Nº</th>
                                    <th style="text-align:center;">Item Code</th>
                                    <th style="text-align:center;">Description</th>
                                    <th style="text-align:center;">Quantity</th>
                                    <th style="text-align:center;">Price</th>
                                    <th style="text-align:center;">Amount</th>
                                </tr>

                                </thead>

                                <tbody>

                                <tr>
                                    <td class="tborder" style="border-bottom: 1px solid #FFF !important;text-align:center; width:40px; vertical-align:middle;">1</td>
                                    <td class="tborder" style="vertical-align:middle; border-bottom: 1px solid #FFF !important;">
                                        DS-0003											</td>
                                    <td class="tborder" style="width: 100px; text-align:center; vertical-align:middle; border-bottom: 1px solid #FFF !important;">
                                        <img src="{{asset('/pos/img/logo.jpg')}}" width="90" height="90" />
                                    </td>
                                    <td class="tborder" style="width: 80px; text-align:center; vertical-align:middle; border-bottom: 1px solid #FFF !important;">1.00</td>
                                    <!-- <td style="text-align:right; width:100px;">460.00</td> -->
                                    <td class="tborder" style="text-align:center; width:100px; border-bottom: 1px solid #FFF !important;">460.00</td>
                                    <td class="tborder" style="text-align:right; width:120px; border-bottom: 1px solid #FFF !important;">460.00</td>
                                </tr>

                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px; border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>
                                    <td class='tborder' style='border-bottom: 1px solid #FFF !important;'></td>

                                </tr>
                                <tr>
                                    <td class='tborder' style='height:31px;'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>
                                    <td class='tborder'></td>

                                </tr>							</tbody>
                                <tfoot>



                                <tr>
                                    <td colspan="4"rowspan="3" style="border-left: 1px solid #fff !important; border-right: 1px solid #fff !important; border-bottom: 1px solid #fff !important;">
                                        <p><strong>Note:</strong>&nbsp;All items cannot be returned in cash.</p>
                                    </td>
                                    <td
                                            style="text-align:right; font-weight:bold; border-bottom:1px solid #fff !important; border-left: 1px solid #fff !important;">Total								</td>
                                    <td style="text-align:right; padding-right:10px; font-weight:bold; padding-top:5px;">760.00</td>


                                </tr>





                                <tr>
                                    <td
                                            style="text-align:right; font-weight:bold; border-bottom:1px solid #fff !important; border-left: 1px solid #fff !important;">Paid								</td>
                                    <td style="text-align:right; font-weight:bold; padding-top:5px;">760.00</td>
                                </tr>
                                <tr>
                                    <td
                                            style="text-align:right; font-weight:bold; border-bottom:1px solid #fff !important; border-left: 1px solid #fff !important;">Balance								</td>
                                    <td style="text-align:right; font-weight:bold; padding-top:5px;">0.00</td>
                                </tr>

                                </tfoot>
                            </table>
                        </div>
                    </td>
                </tr>

                <!--<tr>
                    <td colspan="2">
                        <table border="0" cellspacing="0">
                            <tr>
                                <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:70px;">
                                    <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important;  margin-bottom:2px;" />
                                    <b style="font-size:10px;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​​អតិថិជន​  <br/> Customer`s Signature & Name</b>
                                </td><td>&nbsp;</td><td>&nbsp;</td>
                                <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">

                                </td><td>&nbsp;</td><td>&nbsp;</td>
                                <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:70px;">
                                    <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important; margin-bottom:2px;" />
                                    <b style="font-size:10px;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​អ្នក​ទទួល​  <br/> Receiver`s Signature & Name</b>
                                </td>
                            </tr>
                        </table>

                        <div class="row" style="padding-top: 20px;">
                            <div class="col-sm-2">
                                <p style="font-size: 10px !important;">សូមអរគុណ<br>Thank you</p>
                            </div>
                        </div>

                    </td>
                </tr>-->
            </table>
            <div class="row" style="padding-left: 16px; margin-top:20px; width: 90%">

                <div class="col-sm-3" style="line-height:0px;">
                    <hr>
                    Customer Sig'
                </div>

                <div class="col-sm-3" style="line-height:0px;">
                    <hr>
                    Delivery By
                </div>

                <div class="col-sm-3" style="line-height:0px;">
                    <hr>
                    Receiver`s
                </div>

                <div class="col-sm-3">
                    <p style="padding-top: 30px;">Thanks</p>
                </div>

            </div>
        </div>

        <!-- Print and Back To Add Sale Button -->
        <style>
            @media print {
                #printReportYongWang, #backToAddSale {
                    display: none !important;
                }
            }
        </style>

        <div style="text-align: left; margin-left: 45px;">
            <button onclick="printReport()" id="printReportYongWang" class="btn btn-success btn-xs" style="margin-top: 20px;">
                <strong>Print</strong>
            </button>
            <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/add" id="backToAddSale">
                <button class="btn btn-danger btn-xs" style="margin-top: 20px;">
                    <strong>Back To Add Sale</strong>
                </button>
            </a>
        </div>

        <script>
            function printReport() {
                window.print();
            }

            document.getElementById('printReportYongWang').focus();
        </script>
        <!-- /Print and Back To Add Sale Button -->
    </div>
</center>
</body>
</html>