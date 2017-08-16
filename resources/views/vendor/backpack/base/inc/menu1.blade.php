<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

         <li>
             <a href="{{ url('/admin/dashboard') }}"  style="background-color: blueviolet">
                 <i class="fa fa-home"></i>
                 <span>Home</span></a>
         </li>

        <!-- ========== End of top menu left items ========== -->

    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

        <li class=" hidden-xs" style="background-color: #4a8009;">
            <a href="{{ url('/admin/dashboard') }}">
                <i class="fa fa-dashboard"> Dashboard</i>

            </a>
        </li>
        <li class=" hidden-xs" style="background-color: #4a8009;">
            <a href="{{ url('/admin/elfinder') }}" >
                <i class="fa fa-gears"> Setting</i>

            </a>
        </li>
        <li class=" hidden-xs" style="background-color: #328005;">
            <a href="{{ url('/admin/customers') }}" >
                <i class="fa  fa-user"> Customer</i>

            </a>
        </li>
        <li class=" hidden-xs" style="background-color: #328005;">
            <a href="{{ url('/admin/purchase') }}">
                <i class="fa fa-cart-arrow-down"> Purchase</i>

            </a>
        </li>

        <li class=" hidden-xs" style="background-color: #13803a;">
            <a href="{{ url('/admin/checklist') }}">
                <i class="fa fa-check-square"> Check List</i>

            </a>
        </li>
        <li class=" hidden-xs" style="background-color: #13803a;">
            <a href="#" >
                <i class="fa fa-th-large"> Profit</i>

            </a>
        </li>
        <li class=" hidden-xs" style="background-color: #0d8014;">
            <a href="#" >
                <i class="fa fa-print"> List Sale</i>

            </a>
        </li>
        <li class=" hidden-xs" style="background-color: #24803e;">
            <a href="#" >
                <i class="fa fa-th-large"> Today Sale</i>

            </a>
        </li>
        <li class=" hidden-xs" style="background-color: #14806c;">
            <a href="{{url('/admin/register')}}">
                <i class="fa fa-th-large"> Register</i>

            </a>
        </li>
      <!-- ========================================================= -->
      <!-- ========== Top menu right items (ordered left) ========== -->
      <!-- ========================================================= -->
        <li class="dropdown hidden-xs" style="background-color: #137d80;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-language"> Language</i>
            </a>
            <ul class="dropdown-menu" style=" height: 50px; !important;">
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu" style="    width: 100%; height: 40px !important;">
                        <li><!-- start message -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-th-large"> ខ្មែរ</i>
                            </a>
                        </li>
                        <!-- end message -->
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-th-large">​ English</i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
      <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        @if (Auth::guest())
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/login') }}">{{ trans('backpack::base.login') }}</a></li>
            @if (config('backpack.base.registration_open'))
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/register') }}">{{ trans('backpack::base.register') }}</a></li>
            @endif
        @else
            <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-btn fa-sign-out"></i> {{ trans('backpack::base.logout') }}</a></li>
        @endif

       <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
