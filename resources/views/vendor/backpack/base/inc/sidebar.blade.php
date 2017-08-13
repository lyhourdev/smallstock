@if (Auth::check())
    <style>
        @media (min-width: 768px) {
            .sidebar-mini.sidebar-collapse .main-sidebar {
                width: 70px !important;
            }
        }
        @media (min-width: 768px) {
            .sidebar-mini.sidebar-collapse .main-header .logo {
                width: 70px !important;
            }
        }
        @media (min-width: 768px) {
            .sidebar-mini.sidebar-collapse .main-header .navbar {
                margin-left: 70px !important;
            }
        }
        @media (min-width: 768px) {
            .sidebar-mini.sidebar-collapse .content-wrapper, .sidebar-mini.sidebar-collapse .right-side, .sidebar-mini.sidebar-collapse .main-footer {
                margin-left: 70px !important;
            }
        }
    </style>
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}"
                         class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">{{ trans('backpack::base.administration') }}</li>
                <!-- ================================================ -->
                <!-- ==== Recommended place for admin menu items ==== -->
                <!-- ================================================ -->
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/dashboard.png')}}"></i>
                        <span>{{ trans('backpack::base.dashboard') }}</span></a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/file.png')}}"></i>
                        <span>File manager</span></a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/customers') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/customer.png')}}"></i>
                        <span>Customer</span></a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/order.png')}}"></i>
                        <span>Item</span>
                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/item-category') }}">
                                <i> <img width="45" height="45" src="{{asset('pos/icon/category.png')}}"></i>
                                <span>Item Category</span>
                            </a>
                        </li>
                        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/items') }}">
                                <i> <img width="45" height="45" src="{{asset('pos/icon/rings.png')}}"></i>
                                <span>Item</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/purchase') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/purchase.png')}}"></i>
                        <span>Purchase</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/open-items') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/stock-in.png')}}"></i>
                        <span>Open Item</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/sale') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/sale.png')}}"></i>
                        <span>Sale</span></a>
                </li>

                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/invoice') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/check.png')}}"></i>
                        <span>Invoice</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/checklist') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/list.png')}}"></i>
                        <span>Checklist</span>
                    </a>
                </li>
                <!-- ======================================= -->
                <li class="header">{{ trans('backpack::base.user') }}</li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}">
                        <i> <img width="45" height="45" src="{{asset('pos/icon/logout.png')}}"></i>
                        <span>{{ trans('backpack::base.logout') }}</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
@endif

