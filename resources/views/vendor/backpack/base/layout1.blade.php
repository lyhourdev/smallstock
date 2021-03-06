<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>
      {{ isset($title) ? $title.' :: '.config('backpack.base.project_name').' Admin' : config('backpack.base.project_name').' Admin' }}
    </title>

    @yield('before_styles')

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/plugins/pace/pace.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/backpack/pnotify/pnotify.custom.min.css') }}">

    <!-- BackPack Base CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/backpack/backpack.base.css') }}">

    @yield('after_styles')
    @section('graph_style')
    @show
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        function getRNum() {
            return new  Date().getUTCMilliseconds()+parseInt((Math.random() * 99999)).toString()+parseInt((Math.random() * 99999)).toString()+parseInt((Math.random() * 99999)).toString();
        }
    </script>
</head>
<body class="hold-transition {{ config('backpack.base.skin') }} sidebar-mini">

    <!-- Site wrapper -->
    <div>
<style>
    .main-header .navbar {
        -webkit-transition: margin-left .3s ease-in-out;
        -o-transition: margin-left .3s ease-in-out;
        transition: margin-left .3s ease-in-out;
        margin-bottom: 0;
        margin-left: 0px !important;
        border: none;
        min-height: 50px;
        border-radius: 0;
    }

</style>
      <header class="main-header">
        {{--<!-- Logo -->--}}
        {{--<a href="{{ url('') }}" class="logo">--}}
          {{--<!-- mini logo for sidebar mini 50x50 pixels -->--}}
          {{--<span class="logo-mini">{!! config('backpack.base.logo_mini') !!}</span>--}}
          {{--<!-- logo for regular state and mobile devices -->--}}
          {{--<span class="logo-lg">{!! config('backpack.base.logo_lg') !!}</span>--}}
        {{--</a>--}}
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          {{--<!-- Sidebar toggle button-->--}}
          {{--<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">--}}
            {{--<span class="sr-only">{{ trans('backpack::base.toggle_navigation') }}</span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
          {{--</a>--}}
            <div style="background-color: #3c8dbc !important; height: 50px !important;">
                @include('backpack::inc.menu1')
            </div>
            <div class="row" style="background-color: #deeddb !important;">
                @section('hearder-report')
                @show
            </div>
        </nav>


      </header>

      <!-- =============================================== -->

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div>
        <!-- Content Header (Page header) -->
         @yield('header')

        <!-- Main content -->
        <section id="content">

          @yield('content')

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->


    @yield('before_scripts')

    <!-- jQuery 2.2.0 -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('vendor/adminlte') }}/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{ asset('vendor/adminlte') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/pace/pace.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/plugins/fastclick/fastclick.js"></script>
    <script src="{{ asset('vendor/adminlte') }}/dist/js/app.min.js"></script>

    @section('graph_script')
    @show


    @include('backpack::inc.alerts')

    @yield('after_scripts')


    <!-- JavaScripts -->
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>
