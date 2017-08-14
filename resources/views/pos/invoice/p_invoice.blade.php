<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page INVOICE :POS</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
    {{--<link href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/styles/helpers/bootstrap.min.css" rel="stylesheet"/>--}}
</head>
<body>
<center>
    <br>
    <table class="table-responsive" width="1024px" border="0" cellspacing="0" style="margin:auto;">
        <!--<tr>
            <td rowspan="6">

                                    <div class="text-center" style="margin-bottom:20px;">
                        <img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/logos/"
                             alt="Cloudnet(Phnom Penh)">
                    </div>
                            </td>
        </tr>
        <tr>
            <td colspan="2"> </td>
            <td width="22%">
                <div style="font-family:'Khmer OS'; font-size:12px;">លេខអត្តសញ្ញាណកម្ម អតប​ (VATTIN)</div>
            </td>
            <td colspan="2" width="40%">
                <div style="font-family:'Arial'; font-size:12px;">: </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"> </td>
            <td width="22%">
                <div style="font-family:'Khmer OS'; font-size:12px;">អាស័យដ្ឋាន</div>
            </td>
            <td colspan="2" width="40%">
                <div style="font-family:'Khmer OS'; font-size:12px;">: </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"> </td>
            <td width="22%">
                <div style="font-family:'Arial'; font-size:12px;">Address</div>
            </td>
            <td colspan="2" width="40%">
                <div style="font-family:'Arial'; font-size:12px;">: </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"> </td>
            <td  width="22%">
                <div style="font-family:'Arial'; font-size:12px;">Tel</div>
            </td>
            <td style="font-family:'Arial'; font-size:12px;">: </td>
        </tr>
        <tr>
            <td colspan="2"> </td>
            <td  width="22%">
                <div style="font-family:'Arial'; font-size:12px;">Email</div>
            </td>
            <td style="font-family:'Arial'; font-size:12px;">: poro@gmail.com</td>
        </tr>
        <tr>
            <td style="height:5px;" colspan="5"> <hr width="100%" size="2px" /> </td>
        </tr>-->





        <tr>
            <td colspan="5" width="65%" align="center" style="padding-top:5px;">

                <div style="font-family:'Arial'; font-size:20px;">INVOICE</div>
            </td>
        </tr>

        <tr>
            <td colspan="5" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr>
                        <td width="25%" style="font-family:'Khmer OS Muol Light'; font-size:14px;"> អតិថិជន / Customer </td>
                        <td width="50%">: Mengeang </td>
                        <td width="5px" rowspan="2"> </td>
                        <td width="10%" rowspan="2"> លេខវិក្ក័យបត្រ <br/> Invoice No </td>
                        <td width="15%" rowspan="2" style="padding-left:0px;">: SALE/POS/1708/00005 </td>
                    </tr>
                    <tr>
                        <td width="25%" style="font-family:'Khmer OS'; font-size:14px;"> ឈ្មោះ​ក្រុមហ៊ុន ឬ អតិថិជន <br/> Company name / Customer </td>
                        <td width="50%">: ABC </td>
                    </tr>
                    <tr>
                        <td width="25%" style="font-family:'Khmer OS Muol Light'; font-size:14px;"> ទូរស័ព្ទ​លេខ / Telephone No </td>
                        <td width="50%">: 098 794 242 </td>
                        <td width="5px" rowspan="2"> </td>
                        <td width="10%" rowspan="2"> កាលបរិច្ឆេទ <br/> Date </td>
                        <td width="15%" rowspan="2" style="padding-left:0px;">: 14/08/2017 08:32 </td>
                    </tr>
                    <tr>
                        <td width="25%" style="font-family:'Khmer OS'; font-size:14px;"> លេខអត្តសញ្ញាណកម្ម អតប  (VATTIN)</td>
                        <td width="50%">: </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped print-table order-table">

                        <thead>

                        <tr>
                            <th style="text-align:center;"> Nº</th>
                            <th style="text-align:center;"> Description</th>
                            {{--<th style="text-align:center;">Unit</th>--}}
                            <th style="text-align:center;"> Quantity</th>
                            <th style="text-align:center;">Unit Price</th>
                            <th style="text-align:center;"> Discount</th>
                            <th style="text-align:center;"> Amount</th>
                        </tr>

                        </thead>

                        <tbody>

                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;">1</td>
                            <td style="vertical-align:middle;">
                                <img src="{{asset('/pos/img/logo.jpg')}}" width="70" height="70" /> DESTOP Acer
                            </td>
                            {{--<td style="width: 80px; text-align:center; vertical-align:middle;">Unit</td>--}}
                            <td style="width: 80px; text-align:center; vertical-align:middle;">1.00</td>
                            <!-- <td style="text-align:right; width:100px;">460.00</td> -->
                            <td style="text-align:right; width:100px;">460.00</td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;">0.00</td>
                            <td style="text-align:right; width:120px;">460.00</td>
                        </tr>
                        <tr>
                            <td style="text-align:center; width:40px; vertical-align:middle;">2</td>
                            <td style="vertical-align:middle;">
                                <img src="{{asset('/pos/img/logo.jpg')}}" width="70" height="70" /> DESTOP Acer
                            </td>
                            {{--<td style="width: 80px; text-align:center; vertical-align:middle;">Unit</td>--}}
                            <td style="width: 80px; text-align:center; vertical-align:middle;">1.00</td>
                            <!-- <td style="text-align:right; width:100px;">300.00</td> -->
                            <td style="text-align:right; width:100px;">300.00</td>
                            <td style="width: 100px; text-align:right; vertical-align:middle;">0.00</td>
                            <td style="text-align:right; width:120px;">300.00</td>
                        </tr>
                        </tbody>
                        <tfoot>

                        <tr><td colspan="5" style="text-align:right; padding-right:10px; font-weight:bold;">Total</td><td style="text-align:right; padding-right:10px; font-weight:bold; padding-top:20px;">760.00</td></tr>
                        <tr>
                            <td colspan="4"  rowspan="3"></td>
                            <td
                                    style="text-align:right; font-weight:bold;"> Grand Total							</td>
                            <td style="text-align:right; padding-right:10px; font-weight:bold; padding-top:20px;">760.00</td>
                        </tr>
                        <tr>
                            <td
                                    style="text-align:right; font-weight:bold;"> Paid							</td>
                            <td style="text-align:right; font-weight:bold; padding-top:20px;">760.00</td>
                        </tr>
                        <tr>
                            <td
                                    style="text-align:right; font-weight:bold;"> Balance							</td>
                            <td style="text-align:right; font-weight:bold; padding-top:20px;">0.00</td>
                        </tr>

                        </tfoot>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <table border="0" cellspacing="0">
                    <tr>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:70px;">
                            <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important; " />
                            <b style="font-size:10px;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​អ្នក​ទិញ​  <br/> Customer`s Signature & Name</b>
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            &nbsp;
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:70px;">
                            <hr style="border:dotted 1px; width:160px; vertical-align:bottom !important; " />
                            <b style="font-size:10px;text-align:center;margin-left:3px;">​ហត្ថលេខា និង ឈ្មោះ​អ្នក​លក់​  <br/> Seller`s Signature & Name</b>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="font-size:12px; font-family:'Khmer OS'; padding-top:20px;">
                <b><u>សម្គាល់​</u> : </b> ច្បាប់​​ដើម​សម្រាប់​អ្នក​ទិញ​ ច្បាប់​ចម្លង​សម្រាប់​អ្ន​ក​លក់​។ <br/>
                <b><u>Note</u> : </b> Original invoice for customer copy invoice for seller.
            </td>
        </tr>
    </table>
</center>
<script type="text/javascript">
    window.onload = function() { window.print(); }
</script>

</body>
</html>