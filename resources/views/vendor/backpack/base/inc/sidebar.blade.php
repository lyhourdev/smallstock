@if (Auth::check())

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
                        <i class="fa fa-dashboard"></i>
                        <span>{{ trans('backpack::base.dashboard') }}</span></a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}">
                        <i class="fa fa-files-o"></i>
                        <span>File manager</span></a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/sale') }}">
                        <i class="fa fa-fw fa-desktop"></i>
                        <span>POS</span></a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-university"></i>
                        <span>Item</span>
                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/item-category') }}">
                                <i class="fa fa-list"></i>
                                <span>Item Category</span>
                            </a>
                        </li>
                        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/items') }}">
                                <i class="fa fa-fw fa-diamond"></i>
                                <span>Item</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/open-items') }}">
                        <i class="fa fa-fw fa-book"></i>
                        <span>Open Item</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/purchase') }}">
                        <i class="fa fa-fw fa-cart-arrow-down"></i>
                        <span>Purchase</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/production') }}">
                        <i class="fa fa-fw fa-gavel"></i>
                        <span>Production</span>
                    </a>
                </li>

                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/invoices') }}">
                        <i class="fa fa-fw fa-file-excel-o"></i>
                        <span>Invoice</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/checklist') }}">
                        <i class="fa fa-fw fa-check-square"></i>
                        <span>Checklist</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/list-count-stock') }}">
                        <i class="fa fa-fw fa-check-square"></i>
                        <span>List Count Stock</span>
                    </a>
                </li>
                <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/customers') }}">
                        <i class="fa  fa-user"></i>
                        <span>Customer</span></a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Reports</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Chart Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Overview Chart</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Warehouse Stock Chart</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Profit Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-money"></i>
                                <span>Profit Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">
                                        <i class="fa fa-money"></i>
                                        <span>Profit and/or Loss</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-barcode"></i>
                                <span>Product Report</span>
                                    <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                        </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">
                                        <i class="fa fa-barcode"></i>
                                        <span>Warehouse Product</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-barcode"></i>
                                        <span>Product Monthly</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-barcode"></i>
                                        <span>Inventory In/Out</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-barcode"></i>
                                        <span>Category Value Report</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-barcode"></i>
                                        <span>Product Customer</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-barcode"></i>
                                        <span>Production Report</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-barcode"></i>
                                        <span>Inventory In/Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-heart"></i>
                                <span>Sale Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                        <span>Sale Detail Report</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                        <span>Sale Profit Report</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                        <span>Sale Daily</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                        <span>Sale Monthly</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                        <span>Sale Discount Report</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-heart"></i>
                                        <span>Customers Report</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-star"></i>
                                <span>Purchase Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">
                                        <i class="fa fa-star"></i>
                                        <span>Purchase Daily</span>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-star"></i>
                                        <span>Purchase Monthly</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">
                                <i class="fa fa-fw fa-gavel"></i>
                                <span>Production Report</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ======================================= -->
                <li class="header">{{ trans('backpack::base.user') }}</li>
                <li>
                    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}">
                        <i class="fa fa-sign-out"></i>
                        <span>{{ trans('backpack::base.logout') }}</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
@endif