@extends('backpack::layout2')

@section('content')
    <div class="login-box" >
        {{--style="position:fixed;position: absolute; left: 40%"--}}
        <div class="login-logo">
            <a href="{{ asset('vendor/adminlte/') }}/index2.html"><b style="color: #2f2c26;">STOCK</b> <span style="color: #2f2c26;">Management</span></a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form class="form-horizontal" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix').'/login') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('backpack::base.login') }}
                        </button>

                        {{--<a class="btn btn-link" href="{{ url(config('backpack.base.route_prefix', 'admin').'/password/reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>--}}
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection




{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--<meta charset="utf-8">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--<title>AdminLTE 2 | Log in</title>--}}
{{--<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css">--}}
{{--<link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/iCheck/square/blue.css">--}}
{{--<!--[if lt IE 9]>--}}
{{--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
{{--<![endif]-->--}}
{{--</head>--}}
{{--<body style="background-attachment: fixed; overflow: hidden;" background="{{asset("pos/img/login/background.jpg")}}" >--}}
{{--<div class="login-box" >--}}
{{--style="position:fixed;position: absolute; left: 40%"--}}
{{--<div class="login-logo">--}}
{{--<a href="{{ asset('vendor/adminlte/') }}/index2.html"><b style="color: #2f2c26;">STOCK</b> <span style="color: #2f2c26;">Management</span></a>--}}
{{--</div>--}}
{{--<div class="login-box-body">--}}
{{--<p class="login-box-msg">Sign in to start your session</p>--}}
{{--<form class="form-horizontal" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix').'/login') }}">--}}
{{--{!! csrf_field() !!}--}}
{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">--}}
{{--<input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">--}}
{{--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">--}}
{{--<input type="password" name="password" class="form-control" placeholder="Password">--}}
{{--<span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-xs-8">--}}
{{--<div class="checkbox icheck">--}}
{{--<label>--}}
{{--<input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-xs-4">--}}
{{--<button type="submit" class="btn btn-primary btn-block btn-flat">--}}
{{--{{ trans('backpack::base.login') }}--}}
{{--</button>--}}

{{--<a class="btn btn-link" href="{{ url(config('backpack.base.route_prefix', 'admin').'/password/reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- jQuery 2.2.3 -->--}}
{{--<script src="{{ asset('vendor/adminlte/') }}/plugins/jQuery/jquery-2.2.3.min.js"></script>--}}
{{--<!-- Bootstrap 3.3.6 -->--}}
{{--<script src="{{ asset('vendor/adminlte/') }}/bootstrap/js/bootstrap.min.js"></script>--}}
{{--<!-- iCheck -->--}}
{{--<script src="{{ asset('vendor/adminlte/') }}/plugins/iCheck/icheck.min.js"></script>--}}
{{--<script>--}}
{{--$(function () {--}}
{{--$('input').iCheck({--}}
{{--checkboxClass: 'icheckbox_square-blue',--}}
{{--radioClass: 'iradio_square-blue',--}}
{{--increaseArea: '20%' // optional--}}
{{--});--}}
{{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}




{{--@extends('backpack::layout')--}}
{{--@section('content')--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="box box-default">--}}
{{--<div class="box-header with-border">--}}
{{--<div class="box-title">{{ trans('backpack::base.login') }}</div>--}}
{{--</div>--}}
{{--<div class="box-body">--}}
{{--<form class="form-horizontal" role="form" method="POST" action="{{ url(config('backpack.base.route_prefix').'/login') }}">--}}
{{--{!! csrf_field() !!}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label class="col-md-4 control-label">{{ trans('backpack::base.email_address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input type="email" class="form-control" name="email" value="{{ old('email') }}">--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--<label class="col-md-4 control-label">{{ trans('backpack::base.password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input type="password" class="form-control" name="password">--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<div class="checkbox">--}}
{{--<label>--}}
{{--<input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--<div class="col-md-6 col-md-offset-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ trans('backpack::base.login') }}--}}
{{--</button>--}}

{{--<a class="btn btn-link" href="{{ url(config('backpack.base.route_prefix', 'admin').'/password/reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
