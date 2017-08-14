<!doctype html>
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<title>INVOICE :POS</title>--}}

    {{--<style>--}}
        {{--.invoice-box{--}}
            {{--max-width:800px;--}}
            {{--margin:auto;--}}
            {{--padding:30px;--}}
            {{--border:1px solid #eee;--}}
            {{--box-shadow:0 0 10px rgba(0, 0, 0, .15);--}}
            {{--font-size:16px;--}}
            {{--line-height:24px;--}}
            {{--font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;--}}
            {{--color:#555;--}}
        {{--}--}}

        {{--.invoice-box table{--}}
            {{--width:100%;--}}
            {{--line-height:inherit;--}}
            {{--text-align:left;--}}
        {{--}--}}

        {{--.invoice-box table td{--}}
            {{--padding:5px;--}}
            {{--vertical-align:top;--}}
        {{--}--}}

        {{--.invoice-box table tr td:nth-child(2){--}}
            {{--text-align:right;--}}
        {{--}--}}

        {{--.invoice-box table tr.top table td{--}}
            {{--padding-bottom:20px;--}}
        {{--}--}}

        {{--.invoice-box table tr.top table td.title{--}}
            {{--font-size:45px;--}}
            {{--line-height:45px;--}}
            {{--color:#333;--}}
        {{--}--}}

        {{--.invoice-box table tr.information table td{--}}
            {{--padding-bottom:40px;--}}
        {{--}--}}

        {{--.invoice-box table tr.heading td{--}}
            {{--background:#eee;--}}
            {{--border-bottom:1px solid #ddd;--}}
            {{--font-weight:bold;--}}
        {{--}--}}

        {{--.invoice-box table tr.details td{--}}
            {{--padding-bottom:20px;--}}
        {{--}--}}

        {{--.invoice-box table tr.item td{--}}
            {{--border-bottom:1px solid #eee;--}}
        {{--}--}}

        {{--.invoice-box table tr.item.last td{--}}
            {{--border-bottom:none;--}}
        {{--}--}}

        {{--.invoice-box table tr.total td:nth-child(2){--}}
            {{--border-top:2px solid #eee;--}}
            {{--font-weight:bold;--}}
        {{--}--}}

        {{--@media only screen and (max-width: 600px) {--}}
            {{--.invoice-box table tr.top table td{--}}
                {{--width:100%;--}}
                {{--display:block;--}}
                {{--text-align:center;--}}
            {{--}--}}

            {{--.invoice-box table tr.information table td{--}}
                {{--width:100%;--}}
                {{--display:block;--}}
                {{--text-align:center;--}}
            {{--}--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}

{{--<body>--}}
{{--<div class="invoice-box">--}}
    {{--<table cellpadding="0" cellspacing="0">--}}
        {{--<tr class="top">--}}
            {{--<td colspan="2">--}}
                {{--<table>--}}
                    {{--<tr>--}}
                        {{--<td class="title">--}}
                            {{--<img src="{{asset('/pos/img/logo.jpg')}}" style="width:100PX; max-width:300px;">--}}
                        {{--</td>--}}

                        {{--<td>--}}
                            {{--Invoice #: 123<br>--}}
                            {{--Created: January 1, 2015<br>--}}
                            {{--Due: February 1, 2015--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--</table>--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="information">--}}
            {{--<td colspan="2">--}}
                {{--<table>--}}
                    {{--<tr>--}}
                        {{--<td>--}}
                            {{--Next Step Webs, Inc.<br>--}}
                            {{--12345 Sunny Road<br>--}}
                            {{--Sunnyville, TX 12345--}}
                        {{--</td>--}}

                        {{--<td>--}}
                            {{--Acme Corp.<br>--}}
                            {{--John Doe<br>--}}
                            {{--john@example.com--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--</table>--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="heading">--}}
            {{--<td>--}}
                {{--Payment Method--}}
            {{--</td>--}}

            {{--<td>--}}
                {{--Check #--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="details">--}}
            {{--<td>--}}
                {{--Check--}}
            {{--</td>--}}

            {{--<td>--}}
                {{--1000--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="heading">--}}
            {{--<td>--}}
                {{--Item--}}
            {{--</td>--}}

            {{--<td>--}}
                {{--Price--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="item">--}}
            {{--<td>--}}
                {{--Website design--}}
            {{--</td>--}}

            {{--<td>--}}
                {{--$300.00--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="item">--}}
            {{--<td>--}}
                {{--Hosting (3 months)--}}
            {{--</td>--}}

            {{--<td>--}}
                {{--$75.00--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="item last">--}}
            {{--<td>--}}
                {{--Domain name (1 year)--}}
            {{--</td>--}}

            {{--<td>--}}
                {{--$10.00--}}
            {{--</td>--}}
        {{--</tr>--}}

        {{--<tr class="total">--}}
            {{--<td></td>--}}

            {{--<td>--}}
                {{--Total: $385.00--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--</table>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html><!doctype html>--}}

<html>
<head>
    <meta charset="utf-8">
    <title>INVOICE :POS</title>

</head>

<body>
<style>
    #wrapper {
        max-width: 480px;
        margin: 0 auto;
        padding-top: 20px;
    }
    body {
        color: #000;
        font-size: 13px !important;
    }
    body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
        font-family: 'Ubuntu', sans-serif;
    }
    .text-center {
        text-align: center;
    }
    table {
        border-spacing: 0;
        border-collapse: collapse;
    }
</style>
<div id="wrapper">
    <div id="receiptData">
        <div class="no-print">
            <div class="alert alert-success">
                <button data-dismiss="alert" class="close" type="button">×</button>
                POS Sale successfully added            </div>
        </div>
        <div id="receipt-data">
            <div class="text-center">
                <button class="btn btn-xs btn-default no-print pull-left" onclick="window.print()"><i class="fa fa-print"></i>&nbsp;Print</button>
                <img src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/uploads/logos/" alt="Cloudnet(Phnom Penh)">
                <!--<img style="width:100%;" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/assets/Aylogo/logo501.jpg"> -->
                <!--<h3 style="text-transform:uppercase;">Cloudnet(Phnom Penh)</h3>-->
                <p>#12Eo Phnom Penh 12001 Kondal Cambodia<br>Tel: 			<!--<div style="font-size:13px;">#138E0, St. 13. Sangkat Phsa kandal Phnom Penh<br/>Tel: 092/093/069 311 138 www.a-ycollection.com</div>
			<hr style="border: 1px solid black; margin-top: 10px; margin-bottom: 10px;"/>-->

                </p><div style="font-size:11px;">
                    <table style="width: 100%;">
                        <tbody style="font-size: 12px;">
                        <tr style="text-align:center;">
                            <td style="vertical-align:middle;text-align:left;padding:3px;">អត្រាប្ដូរប្រាក់</td>
                            <td style="vertical-align:middle;text-align:left;">$1 = 4200  ៛</td>
                            <td style="vertical-align:middle;text-align:left;">ថ្ងៃ&#8203;ខែឆ្នាំ</td>
                            <td style="vertical-align:middle;text-align:right;">14/08/2017</td>
                        </tr>
                        <tr style="text-align:center;">
                            <td style="vertical-align:middle;text-align:left;padding:3px;">អ្នកលក់</td>
                            <td style="vertical-align:middle;text-align:left;">owner</td>
                            <td style="vertical-align:middle;text-align:left;">លេខវិក័យបត្រ</td>
                            <td style="vertical-align:middle;text-align:right;">SALE/POS/1708/00005</td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <div style="clear:both;"></div>

                <style>
                    .no_border_btm tr td{
                        border:none !important;
                    }
                </style>

                <table class="table-condensed receipt no_border_btm" style="width:100%;">
                    <thead>
                    <tr style="border:1px dotted black !important;">
                        <th>No</th>
                        <th>Description</th>
                        <!--<th style="color:white !important;">Serial</th>-->
                        <th style="text-align:center;">Qty</th>
                        <th style="text-align:right;">Price</th>
                        <th style="padding-left:10px;padding-right:10px;text-align:right;">Amount </th>
                    </tr>
                    </thead>
                    <tbody style="border-bottom:2px solid black;">
                    <tr class="item">
                        <td class="text-left">1</td>	<td class="text-left">DESTOP Acer</td>	<td class="text-center">1.00</td>	<td class="text-center" style="text-align:right; width:65px !important">$ 460.00</td><td class="text-right">$ 460.00</td></tr><tr class="item">
                        <td class="text-left">2</td>	<td class="text-left">iphone 6 black</td>	<td class="text-center">1.00</td>	<td class="text-center" style="text-align:right; width:65px !important">$ 300.00</td><td class="text-right">$ 300.00</td>
                    </tr></tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <table style="width: 100%; margin-top: 5px;">
                    <tbody><tr>
                        <td style="text-align:left;width:25%;">សរុប</td>
                        <td style="text-align:right;width:35%;">Sub Total (USD) :</td>
                        <td style="text-align:right;">$ 760.00</td>
                    </tr>
                    <tr>
                        <td style="text-align:left;">ពន្ធ</td>
                        <td style="text-align:right;width:35%;">Order Tax (USD) :</td>
                        <td style="text-align:right;">$ 0.00</td>
                    </tr>
                    <tr>
                        <td style="text-align:left;">បញ្ចុះតំលៃ</td>
                        <td style="text-align:right;width:35%;">Discount (USD) :</td>
                        <td style="text-align:right;">$ 0.00</td>
                    </tr>
                    <tr>
                        <td style="text-align:left;">សរុបចុងក្រោយ</td>
                        <td style="text-align:right;width:40%;">Grand Total (USD) :</td>
                        <td style="text-align:right;">$
                            760.00
                        </td>
                    </tr>

                    </tbody></table>
                <table class="received" style="width:100%;margin-top: 5px;">
                    <tbody><tr style="display:none;">
                        <th></th>
                        <th style="display:none;">
                            Rate : 4,200					Qty= (2.00)
                        </th>
                        <th style="display:none;" colspan="3" class="text-right">Total</th>
                        <th style="display:none;" class="text-right">760.00</th>
                    </tr>

                    <tr>
                        <th style="border-left:2px solid #000;border-top:2px solid #000;border-right:none;padding-right: 12px;width:64%;" class="text-right">Received (USD) :</th>
                        <th style="border-right:2px solid #000;border-top:2px solid #000;border-left:none;" class="text-right">10,000.00</th>
                    </tr>
                    <tr>
                        <th style="border-left:2px solid #000;border-bottom:2px solid #000;border-right:none;padding-right: 12px;width:64%;" class="text-right">Received (Riel) :</th>
                        <th style="border-bottom:2px solid #000;border-right:2px solid #000;border-left:none;" class="text-right">20000</th>
                    </tr>

                    <tr>
                        <th style="border-top:2px dotted #000;padding-right: 12px;" class="text-right">Change (USD)</th>
                        <th style="border-top:2px dotted #000" class="text-right">
                            9,244.76						</th>
                    </tr>
                    <tr>
                        <th style="border-top:2px dotted #000;padding-right: 12px;" class="text-right">Change (KHM)</th>
                        <th style="border-top:2px dotted #000" class="text-right">38,828,000</th>
                    </tr>


                    </tbody></table>
                <div style="width:100%;text-align:left;margin-top:10px;display:none">
                    ពិន្ទុចាស់ - Old Point 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b></b><br>
                    ពិន្ទុសរុប - Total Point 	&nbsp;&nbsp;: <b></b>
                </div>
                <div style="text-align:center;font-size:11px;margin-top:10px;">
                    Thank you! <br>
                    ~ ~ ~ <b>CloudNet</b> &nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">www.cloudnet.com.kh</span> ~ ~ ~
                </div>

                <!--<div class="alert alert-success">
                                    <h4>US 0.00 = 0 ៛</h4>
                </div>-->


            </div>
            <div class="text-center">
                <div style="clear:both;"></div>
            </div>
            <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print">
                <hr>
                <div class="alert alert-success">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    POS Sale successfully added    </div>

                <span class="pull-right col-xs-12">
        <a href="javascript:window.print()" id="web_print" class="btn btn-block btn-primary" onclick="window.print();return false;">Re-Print</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/print_/293" target="_blank" class="btn btn-block btn-primary">print a4</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/p_invoice/293" target="_blank" class="btn btn-block btn-primary">print invoice</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/print_rks/293" target="_blank" class="btn btn-block btn-primary">print a4 rks</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/invoice_landscap_a5/293" target="_blank" class="btn btn-block btn-primary">print a5</a>
    </span>
                <!--<span class="pull-right col-xs-12">
                    <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/tax_invoice/293" target="_blank" class="btn btn-block btn-primary" >PRINT TAX INVOICE</a>
                </span>	-->
                <span class="pull-right col-xs-12">
        <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/print_receipt/293" target="_blank" class="btn btn-block btn-primary">Print Receipt</a>
    </span>
                <span class="pull-right col-xs-12">
        <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/cash_receipt/425" target="_blank" class="btn btn-block btn-primary">cash receipt</a>
    </span>
                <!--<span class="pull-right col-xs-12">
                <a href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/sales/print_cabon/293" target="_blank" class="btn btn-block btn-primary" >print Cabon</a>
            </span>-->
                <span class="pull-left col-xs-12"><a class="btn btn-block btn-success" href="#" id="email">Email</a></span>

                <span class="col-xs-12">
        <a class="btn btn-block btn-warning" href="http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos">Back to POS</a>
    </span>
                <div style="clear:both;"></div>
                <div class="col-xs-12" style="background:#F5F5F5; padding:10px;">
                    <p style="font-weight:bold;">Please don't forget to disble the header and footer in browser print
                        settings.</p>

                    <p style="text-transform: capitalize;"><strong>FF:</strong> File &gt; Print Setup &gt; Margin &amp;
                        Header/Footer Make all --blank--</p>

                    <p style="text-transform: capitalize;"><strong>chrome:</strong> Menu &gt; Print &gt; Disable Header/Footer
                        in Option &amp; Set Margins to None</p></div>
                <div style="clear:both;"></div>

            </div>

        </div>
        <canvas id="hidden_screenshot" style="display:none;">

        </canvas>
        <div class="canvas_con" style="display:none;"></div>
        <script type="text/javascript" src="http://cloudnet-myanmar.com/iCloudERP_v3_Production/themes/default/assets/pos/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#email').click(function () {
                    var email = prompt("Email Address", "poro@gmail.com");
                    if (email != null) {
                        $.ajax({
                            type: "post",
                            url: "http://cloudnet-myanmar.com/iCloudERP_v3_Production/pos/email_receipt",
                            data: {token: "fcb41d11e2093a3c5b36ea9f4183c96e", email: email, id: 293},
                            dataType: "json",
                            success: function (data) {
                                alert(data.msg);
                            },
                            error: function () {
                                alert('Ajax request failed, pleas try again');
                                return false;
                            }
                        });
                    }
                    return false;
                });
            });
            $(window).load(function () {
                window.print();
            });
        </script>


    </div>
</div>
</body>
</html>