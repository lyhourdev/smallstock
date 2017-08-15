@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/morris/morris.css">
@endsection

{{--@section('header')--}}
    {{--<section class="content-header">--}}
        {{--<h1>--}}
            {{--{{ trans('backpack::base.dashboard') }}<small>Checklist Item</small>--}}
        {{--</h1>--}}
        {{--<ol class="breadcrumb">--}}
            {{--<li><a href="{{url('admin/dashboard')}}">{{ config('backpack.base.project_name') }}</a></li>--}}
            {{--<li class="active">Checklist Item</li>--}}
        {{--</ol>--}}
    {{--</section>--}}
{{--@endsection--}}
@section('content')
    <div class="box">
        <div class="box-header with-border col-md-12">

            <div class=" pull-left text-left">
                <h3 class="box-title" style="text-align: left !important;">Checklist Table</h3>
            </div>

            <div class=" pull-right text-right">
                <button class="btn btn-xs btn-default no-print pull-left" onclick="window.print()">
                    <i class="fa fa-print"></i>&nbsp;Print
                </button>
            </div>
        </div>
        <div class="box-body">
            <table class="table-responsive" width="1024px" border="0" cellspacing="0">
                <tr>
                    <td rowspan="3" style="virticle-align:left;">
                        <div class="text-center" style="margin-bottom:10px;">
                            <img src="{{asset('/pos/img/logo.jpg')}}" width="100" height="100"
                                 alt="IT Group(Phnom Penh)">
                        </div>
                    </td>
                </tr>

                <tr>
                    {{--style="padding-left: 645px;"--}}
                    <td>
                        <table>
                            <tr>
                                <td></td>
                                <td> លេខវិកយបត្រ /Invoice No : </td>
                                <td style="padding-left:0px;"> Checklist/1708/00005 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td></td>
                                <td> ថ្ងៃទី​/Date : </td>
                                <td style="padding-left:0px;"> 14/08/2017 08:32 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="height:5px;" colspan="2"></td>
                </tr>


                    <table class="table table-bordered">

                <tr>
                    <th style="width: 10px">#</th>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Unit</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th style="width: 120px">Note</th>
                    <th style="width: 10px">Tick</th>
                </tr>

                <tr>
                    <td>2.</td>
                    <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                    <td>P00001</td>
                    <td>product name one </td>
                    <td>ជី</td>
                    <td>2</td>
                    <td>$ 100</td>
                    <td>$ 200</td>
                    <td></td>
                    <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                    <td>P00001</td>
                    <td>product name one </td>
                    <td>ជី</td>
                    <td>2</td>
                    <td>$ 100</td>
                    <td>$ 200</td>
                    <td></td>
                    <td style="text-align: center;"><input type="checkbox"></td>
                </tr>
                        <tr>
                            <td>4.</td>
                            <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                            <td>P00001</td>
                            <td>product name one </td>
                            <td>ជី</td>
                            <td>2</td>
                            <td>$ 100</td>
                            <td>$ 200</td>
                            <td></td>
                            <td style="text-align: center;"><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td> <img src="{{asset('pos/img/item1.jpg')}}" width="50" height="50"></td>
                            <td>P00001</td>
                            <td>product name one </td>
                            <td>ជី</td>
                            <td>2</td>
                            <td>$ 100</td>
                            <td>$ 200</td>
                            <td></td>
                            <td style="text-align: center;"><input type="checkbox"></td>
                        </tr>
            </table>
            </table>
        </div>
    </div>
@endsection
@section('graph_script')

@endsection

