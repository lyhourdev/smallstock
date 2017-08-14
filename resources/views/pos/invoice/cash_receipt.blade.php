<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page INVOICE :POS</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">

</head>
<body>
<center>
    <table class="table-responsive" width="1024px" height="50%" border="0" cellspacing="0" style="margin:auto;">
        <tr>
            <td rowspan="2" width="20%" style="virticle-align:middle;">
                <div class="text-center" style="margin-bottom:20px;">
                    <img src="{{asset('/pos/img/logo.jpg')}}" width="100" height="100"
                         alt="IT Groupt(Phnom Penh)">
                </div>
            </td>
            <td>
                <table width="100%">
                    <tr>
                        <td width="50%"></td>
                        <td width="20%"> receipt no </td>
                        <td width="30%" style="padding-left:0px; text-align:right;"> RV/1708/00001 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="50%"></td>
                        <td width="20%"> Date </td>
                        <td width="30%" style="padding-left:0px; text-align:right;"> 14/08/2017 08:32 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height:100px;" colspan="2" style="text-align:center;">
                <div style="font-family:'Arial'; font-size:24px; font-weight:bold; text-align:center;">CASH RECEIPT</div>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:14px;"> received from </td>
                        <td width="60%" colspan="3" align="center" style="border-bottom:1px solid black;"> Chanthy </td>
                        <td width="15%" style="text-align:left;"> amount of </td>
                        <td width="15%" style="padding-left:0px; text-align:right; border-bottom:1px solid black;"> $ 760.00 </td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:14px;"> for </td>
                        <td colspan="5" width="90%" style="text-align:center; border-bottom:1px solid black;">  </td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:14px;">  </td>
                        <td width="60%" colspan="3" align="center">  </td>
                        <td width="15%" style="text-align:left;"> Payment Method </td>
                        <td width="15%" style="padding-left:0px; text-align:center; border-bottom:1px solid black;">
                            Cash						</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr style="height:40px;">
                        <td width="20%" style="font-family:'Khmer OS'; font-size:16px;"> Current Balance : </td>
                        <td width="30%" colspan="3" align="right" style="border-bottom:1px solid black; padding-right:10px;"> $ 760.00 </td>
                        <td width="25%" style="text-align:left;"></td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="20%" style="font-family:'Khmer OS'; font-size:16px;"> payment amount : </td>
                        <td width="30%" colspan="3" align="right" style="border-bottom:1px solid black; padding-right:10px;"> $ 760.00 </td>
                        <td width="25%" style="text-align:left;"></td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="20%" style="font-family:'Khmer OS'; font-size:16px;"> balance due : </td>
                        <td width="30%" colspan="3" align="right" style="border-bottom:1px solid black; padding-right:10px;"> $ 0.00 </td>
                        <td width="25%" style="text-align:left;"></td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:16px; font-weight:bold;"> Noted : </td>
                        <td width="65%" colspan="3" align="right" style="border-bottom:1px solid black;">  </td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="0" cellspacing="0">
                    <tr>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;">
                            <b style="margin-top:10px;"> Paid by </b>
                            <hr style="border:1px solid black; width:160px; vertical-align:bottom !important;  margin-bottom:20px; margin-top:50px;" />
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            &nbsp;
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;">
                            <b style="margin-top:10px;"> Received by </b>
                            <hr style="border:1px solid black; width:160px; vertical-align:bottom !important;  margin-bottom:20px; margin-top:50px;" />
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
    <table class="table-responsive" width="1024px" height="50%" border="0" cellspacing="0" style="margin:auto;">
        <tr>
            <td rowspan="2" width="20%" style="virticle-align:middle;">
                <div class="text-center" style="margin-bottom:20px;">
                    <img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/logos/"
                         alt="Cloudnet(Phnom Penh)">
                </div>
            </td>
            <td>
                <table width="100%">
                    <tr>
                        <td width="50%"></td>
                        <td width="20%"> receipt no </td>
                        <td width="30%" style="padding-left:0px; text-align:right;"> RV/1708/00001 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%">
                    <tr>
                        <td width="50%"></td>
                        <td width="20%"> Date </td>
                        <td width="30%" style="padding-left:0px; text-align:right;"> 14/08/2017 08:32 </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="height:100px;" colspan="2" style="text-align:center;">
                <div style="font-family:'Arial'; font-size:24px; font-weight:bold; text-align:center;">CASH RECEIPT</div>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:14px;"> received from </td>
                        <td width="60%" colspan="3" align="center" style="border-bottom:1px solid black;"> Chanthy </td>
                        <td width="15%" style="text-align:left;"> amount of </td>
                        <td width="15%" style="padding-left:0px; text-align:right; border-bottom:1px solid black;"> $ 760.00 </td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:14px;"> for </td>
                        <td colspan="5" width="90%" style="text-align:center; border-bottom:1px solid black;">  </td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:14px;">  </td>
                        <td width="60%" colspan="3" align="center">  </td>
                        <td width="15%" style="text-align:left;"> Payment Method </td>
                        <td width="15%" style="padding-left:0px; text-align:center; border-bottom:1px solid black;">
                            Cash						</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr style="height:40px;">
                        <td width="20%" style="font-family:'Khmer OS'; font-size:16px;"> Current Balance : </td>
                        <td width="30%" colspan="3" align="right" style="border-bottom:1px solid black; padding-right:10px;"> $ 760.00 </td>
                        <td width="25%" style="text-align:left;"></td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="20%" style="font-family:'Khmer OS'; font-size:16px;"> payment amount : </td>
                        <td width="30%" colspan="3" align="right" style="border-bottom:1px solid black; padding-right:10px;"> $ 760.00 </td>
                        <td width="25%" style="text-align:left;"></td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                    <tr style="height:40px;">
                        <td width="20%" style="font-family:'Khmer OS'; font-size:16px;"> balance due : </td>
                        <td width="30%" colspan="3" align="right" style="border-bottom:1px solid black; padding-right:10px;"> $ 0.00 </td>
                        <td width="25%" style="text-align:left;"></td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2" width="65%" align="center" style="padding-top:5px;">
                <table width="100%">
                    <tr style="height:40px;">
                        <td width="10%" style="font-family:'Khmer OS'; font-size:16px; font-weight:bold;"> Noted : </td>
                        <td width="65%" colspan="3" align="right" style="border-bottom:1px solid black;">  </td>
                        <td width="25%" style="padding-left:0px; text-align:right;"></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table border="0" cellspacing="0">
                    <tr>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;">
                            <b style="margin-top:10px;"> Paid by </b>
                            <hr style="border:1px solid black; width:160px; vertical-align:bottom !important;  margin-bottom:20px; margin-top:50px;" />
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;padding-top:50px;">
                            &nbsp;
                        </td><td>&nbsp;</td><td>&nbsp;</td>
                        <td colspan="3" width="33%" valign="bottom" style="text-align:center;">
                            <b style="margin-top:10px;"> Received by </b>
                            <hr style="border:1px solid black; width:160px; vertical-align:bottom !important;  margin-bottom:20px; margin-top:50px;" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>

</body>
</html>