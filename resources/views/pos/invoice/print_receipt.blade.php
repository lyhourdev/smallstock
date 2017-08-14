<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Print Receipt :POS</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
</head>
<body>

<center>
    <table class="table-responsive" width="1024px" border="0" cellspacing="0" style="margin:auto;">
        <tr>
            <td rowspan="3" width="20%" style="virticle-align:middle;">
                <div class="text-center" style="margin-bottom:20px;">
                    <img src="{{asset('/pos/img/logo.jpg')}}" width="100" height="100"
                         alt="IT Group(Phnom Penh)">
                </div>

            </td>
            <td colspan="3" width="80%" style="padding-left:50px;">
                <div style="font-family:'Arial'; font-size:24px; font-weight:bold;">INVOICE</div>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="40%"></td>
                        <td width="30%"> លេខវិក័យបត្រ /Invoice No </td>
                        <td width="30%" style="padding-left:0px;">: SALE/POS/1708/00005 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="40%"></td>
                        <td width="30%"> ថ្ងៃទី​/Date </td>
                        <td width="30%" style="padding-left:0px;">: 14/08/2017 08:32 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height:10px;" colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr>
                        <td width="15%" style="font-family:'Khmer OS'; font-size:14px;"> ឈ្មោះ/Full name: </td>
                        <td width="25%">: Chanthy </td>
                        <td width="10%"> ភេទ/Gender </td>
                        <td width="10%">  </td>
                        <td width="15%" style="text-align:right; padding-right:15px;"> កូដ/Student ID </td>
                        <td width="19%" style="padding-left:0px;">: Samet </td>
                    </tr>
                    <tr>
                        <td width="15%" style="font-family:'Khmer OS'; font-size:14px;"> លេខទូរស័ព្ទ/Telephone </td>
                        <td width="25%">: 012 222 333 </td>
                        <td> </td>
                        <td width="15%" colspan="2" style="text-align:right; padding-right:20px;"> អ្នក​ទទួលប្រាក់​/Cashier </td>
                        <td width="19%" style="padding-left:0px;">: owner </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped print-table order-table" style="'font-family:Khmer OS'; font-size:14px;">

                        <thead>

                        <tr>
                            <th style="text-align:center;">ល-រ <br/> Nº</th>
                            <th style="text-align:center;">បរិយាយមុខទំនិញ <br/> Description</th>
                            <th style="text-align:center;">ខ្នាត <br/> Unit</th>
                            <th style="text-align:center;">បរិមាណ <br/> Quantity</th>
                            <th style="text-align:center;">ថ្លៃ​ឯកតា <br/> Unit Price</th>
                            <th style="text-align:center;">អាករឯកតា <br/> Tax</th>							<th style="text-align:center;">ថ្លៃ​ទំនិញ <br/> Amount</th>
                        </tr>

                        </thead>

                        <tbody>

                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;">1</td>
                            <td style="vertical-align:middle;">
                                <img src="{{asset('/pos/img/logo.jpg')}}" width="70" height="70" /> DESTOP Acer																																			</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">Unit</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">1.00</td>
                            <!-- <td style="text-align:right; width:100px;">460.00</td> -->
                            <td style="text-align:right; width:100px;">460.00</td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> 0.00</td>								<td style="text-align:right; width:120px;">460.00</td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;">2</td>
                            <td style="vertical-align:middle;">
                                <img src="{{asset('/pos/img/logo.jpg')}}" width="70" height="70" /> iphone 6 black																																			</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">Unit</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">1.00</td>
                            <!-- <td style="text-align:right; width:100px;">300.00</td> -->
                            <td style="text-align:right; width:100px;">300.00</td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> 0.00</td>								<td style="text-align:right; width:120px;">300.00</td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6"
                                style="text-align:right; font-weight:bold;">សរុបរួម/Grand Total							</td>
                            <td style="text-align:right; padding-right:10px; font-weight:bold; padding-top:20px;">760.00</td>
                        </tr>
                        <tr>
                            <td colspan="6"
                                style="text-align:right; font-weight:bold;">បានបង់​/Paid							</td>
                            <td style="text-align:right; font-weight:bold; padding-top:20px;">760.00</td>
                        </tr>
                        <tr>
                            <td colspan="6"
                                style="text-align:right; font-weight:bold;">សមតុល្យ​ទឹកប្រាក់/Balance							</td>
                            <td style="text-align:right; font-weight:bold; padding-top:20px;">0.00</td>
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table width="100%" style="font-family:'Arial'; font-size:14px;">
                    <tr>
                        <td width="15%"> In Words </td>
                        <td width="85%">: seven hundred and sixty dolar </td>
                    </tr>
                    <!--<tr>
                        <td width="15%"> Payment Method </td>
                        <td width="85%">: cash </td>
                    </tr>-->
                    <tr>
                        <td width="15%"> Noted </td>
                        <td width="85%">:  </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="0" cellspacing="0">
                    <tr>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important;  margin-bottom:2px;" />
                            <b style="font-size:12px !important;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​​អតិថិជន​  <br/> Customer`s Signature & Name</b>
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            &nbsp;
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important; margin-bottom:2px;" />
                            <b style="font-size:12px !important;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​អ្នក​ទទួល​  <br/> Receiver`s Signature & Name</b>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr width="100%" size="5" style="margin-top:15px; margin-bottom:10px;" />
            </td>
        </tr>
    </table>
</center>
<center>
    <table class="table-responsive" width="1024px" border="0" cellspacing="0" style="margin:auto;">
        <tr>
            <td rowspan="3" width="20%" style="virticle-align:middle;">
                <div class="text-center" style="margin-bottom:20px;">
                    <img src="{{asset('/pos/img/logo.jpg')}}" width="100" height="100"
                         alt="IT Group(Phnom Penh)">
                </div>

            </td>
            <td colspan="3" width="80%" style="padding-left:50px;">
                <div style="font-family:'Arial'; font-size:24px; font-weight:bold;">INVOICE</div>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="40%"></td>
                        <td width="30%"> លេខវិក័យបត្រ /Invoice No </td>
                        <td width="30%" style="padding-left:0px;">: SALE/POS/1708/00005 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="40%"></td>
                        <td width="30%"> ថ្ងៃទី​/Date </td>
                        <td width="30%" style="padding-left:0px;">: 14/08/2017 08:32 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height:10px;" colspan="2"></td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr>
                        <td width="15%" style="font-family:'Khmer OS'; font-size:14px;"> ឈ្មោះ/Full name: </td>
                        <td width="25%">: Chanthy </td>
                        <td width="10%"> ភេទ/Gender </td>
                        <td width="10%">  </td>
                        <td width="15%" style="text-align:right; padding-right:15px;"> កូដ/Student ID </td>
                        <td width="19%" style="padding-left:0px;">: Samet </td>
                    </tr>
                    <tr>
                        <td width="15%" style="font-family:'Khmer OS'; font-size:14px;"> លេខទូរស័ព្ទ/Telephone </td>
                        <td width="25%">: 012 222 333 </td>
                        <td> </td>
                        <td width="15%" colspan="2" style="text-align:right; padding-right:20px;"> អ្នក​ទទួលប្រាក់​/Cashier </td>
                        <td width="19%" style="padding-left:0px;">: owner </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped print-table order-table" style="'font-family:Khmer OS'; font-size:14px;">

                        <thead>

                        <tr>
                            <th style="text-align:center;">ល-រ <br/> Nº</th>
                            <th style="text-align:center;">បរិយាយមុខទំនិញ <br/> Description</th>
                            <th style="text-align:center;">ខ្នាត <br/> Unit</th>
                            <th style="text-align:center;">បរិមាណ <br/> Quantity</th>
                            <th style="text-align:center;">ថ្លៃ​ឯកតា <br/> Unit Price</th>
                            <th style="text-align:center;">អាករឯកតា <br/> Tax</th>							<th style="text-align:center;">ថ្លៃ​ទំនិញ <br/> Amount</th>
                        </tr>

                        </thead>

                        <tbody>

                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;">1</td>
                            <td style="vertical-align:middle;">
                                <img src="{{asset('/pos/img/logo.jpg')}}" width="70" height="70" /> DESTOP Acer																																			</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">Unit</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">1.00</td>
                            <!-- <td style="text-align:right; width:100px;">460.00</td> -->
                            <td style="text-align:right; width:100px;">460.00</td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> 0.00</td>								<td style="text-align:right; width:120px;">460.00</td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;">2</td>
                            <td style="vertical-align:middle;">
                                <img src="{{asset('/pos/img/logo.jpg')}}" width="70" height="70" /> iphone 6 black																																			</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">Unit</td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;">1.00</td>
                            <!-- <td style="text-align:right; width:100px;">300.00</td> -->
                            <td style="text-align:right; width:100px;">300.00</td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> 0.00</td>								<td style="text-align:right; width:120px;">300.00</td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;"> &nbsp; </td>
                            <td style="vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="width: 80px; text-align:center; vertical-align:middle;"> &nbsp; </td>
                            <td style="text-align:right; width:100px;"> &nbsp; </td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;"> &nbsp; </td>									<td style="text-align:right; width:120px;"> &nbsp; </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6"
                                style="text-align:right; font-weight:bold;">សរុបរួម/Grand Total							</td>
                            <td style="text-align:right; padding-right:10px; font-weight:bold; padding-top:20px;">760.00</td>
                        </tr>
                        <tr>
                            <td colspan="6"
                                style="text-align:right; font-weight:bold;">បានបង់​/Paid							</td>
                            <td style="text-align:right; font-weight:bold; padding-top:20px;">760.00</td>
                        </tr>
                        <tr>
                            <td colspan="6"
                                style="text-align:right; font-weight:bold;">សមតុល្យ​ទឹកប្រាក់/Balance							</td>
                            <td style="text-align:right; font-weight:bold; padding-top:20px;">0.00</td>
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table width="100%" style="font-family:'Arial'; font-size:14px;">
                    <tr>
                        <td width="15%"> In Words </td>
                        <td width="85%">: seven hundred and sixty dolar </td>
                    </tr>
                    <!--<tr>
                        <td width="15%"> Payment Method </td>
                        <td width="85%">: cash </td>
                    </tr>-->
                    <tr>
                        <td width="15%"> Noted </td>
                        <td width="85%">:  </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="0" cellspacing="0">
                    <tr>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important;  margin-bottom:2px;" />
                            <b style="font-size:12px !important;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​​អតិថិជន​  <br/> Customer`s Signature & Name</b>
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            &nbsp;
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important; margin-bottom:2px;" />
                            <b style="font-size:12px !important;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​អ្នក​ទទួល​  <br/> Receiver`s Signature & Name</b>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>

</body>
</html>