@extends('backpack::layout')
@section('graph_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('pos') }}/css/style.css">

@endsection

@section('content')
    <div class="cover-add" id="overlay">
        <div id="container">
            <div id="left-panel">
                <div class="col-md-12">
                    <div class="input-group margin">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">All Category &nbsp;&nbsp; <span class="fa fa-caret-down"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Rings</a></li>
                                <li><a href="#">Bracelets</a></li>
                                <li><a href="#">Necklaces</a></li>
                                <li><a href="#">Earrings</a></li>
                                <li><a href="#">Brooches</a></li>
                                <li><a href="#">Pendents</a></li>
                                <li><a href="#">Anklets</a></li>
                                <li><a href="#">Belly Chain</a></li>
                            </ul>
                        </div>
                        <input type="text" class="form-control" style="background-color: #ffffff; color: #000000;">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-warning btn-flat"><i class="fa fa-fw fa-search"></i></button>
                    </span>
                    </div>
                </div>
                <div class="col-md-12 cat-items-style">
                    <div id="slider-2" class="slider">
                        <div class="slider-wrapper">
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-aqua">
                                        <div class="bg-size">
                                        <span>
                                            <i><img width="50" height="50" src="{{asset('pos/icon/sale.png')}}"></i>
                                        </span>
                                            <br>
                                            <span class="fon-size"><b>Rings</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-green">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/purchase.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Bracelets</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-aqua">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/stock-in.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Necklaces</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-red">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/check.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Earrings</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-green">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/customer.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Brooches</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-gray">
                                        <div class="bg-size">
                                <span>
                                    <i><img width="50" height="50" src="{{asset('pos/icon/report.png')}}"></i>
                                </span>
                                            <br>
                                            <span class="fon-size"><b>Pendents</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-green">
                                        <div class="bg-size">
                                        <span>
                                            <i><img width="50" height="50" src="{{asset('pos/icon/report.png')}}"></i>
                                        </span>
                                            <br>
                                            <span class="fon-size"><b>Anklets</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="cat-padding-around">
                                    <div class="info-box bg-blue">
                                        <div class="bg-size">
                                        <span>
                                            <i><img width="50" height="50" src="{{asset('pos/icon/report.png')}}"></i>
                                        </span>
                                            <br>
                                            <span class="fon-size"><b>Belly Chain</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <a href="#" class="slider-button--prev">
                            <i class="fa fa-fw fa-chevron-left"></i>
                        </a>
                        <a href="#" class="slider-button--next">
                            <i class="fa fa-fw fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                {{--====================items==================--}}
                <div class="col-md-12 items-style">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 top-item-style">
                        <div class="padding-around">
                            <i class="fa fa-fw fa-plus-circle add-pro"></i>
                            <img class=" open-button img-padding" width="120" height="120" src="{{asset('/pos/img/item1.jpg')}}" alt="...">
                            <div class="name-style  open-button" >item name one</div>
                            <div class="id-style  open-button"><b><span>$</span> 1000</b></div>
                            <div class="id-style  open-button"><b><span>ID:</span> P00001</b></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 top-item-style">
                        <div class="padding-around">
                            <i class="fa fa-fw fa-plus-circle add-pro"></i>
                            <img class=" open-button img-padding" width="120" height="120" src="{{asset('/pos/img/item2.jpg')}}" alt="...">
                            <div class="name-style  open-button2" >item name two</div>
                            <div class="id-style  open-button2"><b><span>$</span> 1000</b></div>
                            <div class="id-style  open-button2"><b><span>ID:</span> P00001</b></div>
                        </div>
                    </div>



                </div>
                {{--====================end items==================--}}
            </div>
            <div id="right-section">
                <img class="profile-user-img img-responsive img-circle" src="{{ asset('vendor/adminlte') }}/dist/img/user4-128x128.jpg" alt="User profile picture">
                <h3 class="profile-username text-center">Sale Management</h3>
                <div class="col-md-12 col-sm-12 panel-height">
                    <div class="tbl-header">
                        <table class="table table-action">
                            <thead style="width:100%;">
                            <tr>
                                <th style="width:15%;">#Code</th>
                                <th style="width:30%;">Name</th>
                                <th style="width:10%;">Qty</th>
                                <th style="width:20%;">Price</th>
                                <th style="width:20%;">Total</th>
                                <th style="width: 10%;"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div style="width:100%;overflow:auto; max-height:350px; text-align: center;">
                        <table style="width:100%;">
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:10%;">P0001</td>
                                <td style="width:30%;" class="name-style-order">Name Item 1</td>
                                <td style="width:10%;">2</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width:20%;"><span>$</span> 200</td>
                                <td style="width: 10%">
                                    <a class="btn btn-social-icon btn-facebook">
                                        <i class="fa  fa-plus"></i>
                                    </a>
                                    <a class="btn btn-social-icon btn-google">
                                        <i class="fa  fa-remove"></i>
                                    </a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 total_amount">
                    <div class="col-md-5 col-sm-6 col-xs-12 title-total">SUB TOTAL:</div>
                    <div class="col-md-7 col-sm-6 col-xs-12 result-total"><input type="text" value="" readonly placeholder=" $ 1000.00" style="width: 100%;"></div>
                </div>
                <div class="col-md-12 col-sm-12 total_amount">
                    <div class="col-md-5 col-sm-6 col-xs-12 title-total">DISCOUNT:</div>
                    <div class="col-md-7 col-sm-6 col-xs-12 result-total"><input type="text" value="" placeholder=" $ 0.00" style="width: 100%;"></div>
                </div>
                <div class="col-md-12 col-sm-12 total_amount">
                    <div class="col-md-5 col-sm-6 col-xs-12 title-total">GRAND TOTAL:</div>
                    <div class="col-md-7 col-sm-6 col-xs-12 result-total"><input type="text" value="" readonly placeholder=" $ 1000.00" style="width: 100%;"></div>
                </div>
                <div class="col-md-12 col-sm-12 checkout_amount">
                    <a href="#"  class="btn btn-primary btn-block"><b>CHECKOUT</b></a>
                </div>
            </div>
        </div>
    </div>
    {{--================item pop up=============--}}
    <div class="pop-up hidden">
        <div class="box small-6 large-centered">
            <a href="#" class="close-button">&#10006;</a>
            <div style="text-align: center;">
                <img src="{{asset('/pos/img/item1.jpg')}}" height="500" width="500">
                <h3>item name one</h3>
                <h3><span>Price: </span> $ <span>1000</span></h3>
                <h3><span>ID: </span> <span>P00001</span></h3>
            </div>
        </div>
    </div>
    <div class="pop-up2 hidden" style="padding-left: 200px; padding-right: 200px; padding-top: 10px !important;">
        <div class="box small-6 large-centered">
            <a href="#" class="close-button2">&#10006;</a>
            <div style="text-align: center;">
                <img src="{{asset('/pos/img/item2.jpg')}}" height="500" width="500">
                <h3>item name two</h3>
                <h3><span>Price: </span> $ <span>1000</span></h3>
                <h3><span>ID: </span> <span>P00002</span></h3>
            </div>
        </div>
    </div>
    {{--============end item pop up===========--}}
@endsection
@section('graph_script')
    <script src="{{ asset('vendor/adminlte') }}/dist/js/demo.js"></script>
    <script>
        (function($) {

            $.fn.flexboxslider = function(opts) {
                var options = $.extend({}, $.fn.flexboxslider.defaults, opts);

                return this.each(function() {

                    var el = $(this), // el correspond au slider
                        $slides_container = el.find('.slider-wrapper'),
                        $slides = el.find('.slide'),
                        $slides_length = $slides.length,
                        prev = el.find('.slider-button--prev'),
                        next = el.find('.slider-button--next'),
                        slider_nav, // créé lors de l'initalisation
                        timer,
                        resizeTimer,
                        steps = 1,
                        current_step = 1,
                        items_per_step = 4;

                    function initialize() {

                        // initialisation du nombre d'étapes
                        items_per_step = options.items;
                        steps = Math.ceil($slides_length / items_per_step);
                        current_step = 1;

                        // DOM
                        $slides_container.wrap('<div class="slider-viewport"></div>');

                        if (options.show_nav) {
                            create_nav();
                        }

                        el.css({
                            'max-height':  options.max_height + 'px'
                        });

                        // Events
                        $(window).resize(resize);

                        prev.on('click', function(e) {
                            e.preventDefault();
                            move(current_step - 1);
                        });

                        next.on('click', function(e) {
                            e.preventDefault();
                            move(current_step + 1);
                        });

                        if (options.timer) {
                            el.on('mouseover', stop);
                            el.on('mouseleave', play);
                        }

                        // launch
                        resize();
                        if (options.timer) {
                            play();
                        }
                    }

                    function create_nav() {
                        slider_nav = $('<ul></ul>');
                        slider_nav.addClass('slider-nav');
                        create_nav_links();
                        el.append(slider_nav);
                    }

                    function create_nav_links() {
                        for (var i = 0; i < steps; i++) {
                            var li = $('<li></li>')
                            var nav_link = $('<a></a>');
                            nav_link.attr('href', '#');

                            nav_link.on('click', function(e) {
                                e.preventDefault();

                                var index = $(this).parent().index(),
                                    index_plus_1 = index + 1;

                                if (index_plus_1 > current_step) {
                                    move(index_plus_1);
                                } else {
                                    move(index_plus_1);
                                }
                            });

                            li.append(nav_link);
                            slider_nav.append(li);
                        }
                    }

                    function update_nav() {
                        var links_count = slider_nav.find('li a').length;
                        //                console.log(links_count);
                        if (links_count !== steps) {
                            slider_nav.empty();
                            create_nav_links();
                        }
                    }

                    function resize() {

                        // timer pour éviter les soucis pendant le redimensionnement et arrêter/ relancer la boucle
                        if (options.timer) {
                            stop();
                            clearTimeout(resizeTimer);
                            resizeTimer = setTimeout(function() {
                                play();
                            }, 250);
                        }

                        if (options.items > 1) {
                            responsive_slider();
                        } else {
                            // slider avec 1 seule image par étape
                            resize_slide();
                        }

                        // repositionnement du conteneur de slides sans animation
                        position_slides_container();

                        // affichage boutons (bon emplacement dans le cas ou on modifie le nombre d'items)
                        actualize_buttons();
                    }

                    function responsive_slider() {
                        // largeur du slider
                        var slider_width = el.outerWidth(true);

                        // small screens
                        if (slider_width < options.small_screen && options.items >= 2) {
                            // 2 items par étape
                            change_items_per_step_to(2);
                        } else if (slider_width < options.tablet && options.items >= 3) {
                            // 3 items par étape
                            change_items_per_step_to(3);
                        } else {
                            change_items_per_step_to(options.items);
                        }

                        resize_slide();
                        update_nav(items_per_step);
                    }

                    function change_items_per_step_to(new_items_per_step) {
                        items_per_step = new_items_per_step;

                        var new_steps = Math.ceil($slides_length / items_per_step);

                        if (new_steps != steps) {
                            // calcul du nombre de slides avant de modifier les steps
                            var old_current_step_slides_count = current_step == steps ?
                                $slides_length :
                                current_step * items_per_step;

                            // calcul du nouveau current step pour le nouveau nombre de steps
                            var new_current_step = old_current_step_slides_count == $slides_length ?
                                new_steps :
                                old_current_step_slides_count / items_per_step;

                            current_step = new_current_step;
                        }
                        steps = new_steps;
                    }

                    function resize_slide() {
                        // largeur du slider sans border et margin
                        var slider_width = el.width();
                        // calcul de la nouvelle largeur de chaque slide
                        var slide_width = slider_width / items_per_step;

                        // redimensionnement des slides
                        $slides.css({
                            width: slide_width + 'px'
                        });
                    }

                    function position_slides_container() {
                        var margin = parseInt($slides.css('margin-left')) + parseInt($slides.css('margin-right')),
                            slide_width = (el.width() / items_per_step) + margin;

                        var left = 0;
                        if (current_step == 1) {
                            left = 0;
                        } else if (current_step == steps) {
                            left = (($slides_length - (current_step * items_per_step)) + ((current_step - 1) * items_per_step)) * slide_width;
                        } else {
                            left = ((current_step - 1) * items_per_step) * slide_width;
                        }
                        $slides_container.css({
                            left: '-' + left + 'px'
                        });
                    }


                    function calc_slides_diff(from_step, to_step) {

                        // front
                        if (from_step < to_step) {
                            // to_step == steps ?
                            var slides_to_move = to_step == steps ?
                                $slides_length - (current_step * items_per_step) :
                                (to_step * items_per_step) - (current_step * items_per_step);

                            return slides_to_move;
                        }
                        // back
                        if (from_step > to_step) {

                            var slides_to_move = current_step == steps ?
                                $slides_length - (to_step * items_per_step) :
                                (current_step * items_per_step) - (to_step * items_per_step);

                            return slides_to_move;
                        }

                        // from == to ?
                        return 0;
                    }

                    function move(to_step) {
                        // calcul déplacement
                        var slides_to_move = calc_slides_diff(current_step, to_step);
                        // largeur du déplacement
                        var width = items_per_step > 1 ?
                            $slides.outerWidth(true) * slides_to_move:
                            $slides.outerWidth(true) * slides_to_move;


                        // déplacement selon la direction + animation
                        // front
                        if (current_step < to_step) {
                            $slides_container.animate({
                                left: '-=' + width + 'px'
                            }, options.animation_duration, options.easing);
                            current_step = to_step;
                        }
                        // back
                        if (current_step > to_step) {
                            $slides_container.animate({
                                left: '+=' + width + 'px'
                            }, options.animation_duration, options.easing);
                            current_step = to_step;
                        }
                        // si current_step == to_step pas de déplacement

                        // affichage des boutons
                        actualize_buttons();
                    }

                    function actualize_buttons() {

                        if (current_step <= 1) {
                            prev.hide();
                        } else {
                            prev.show();
                        }

                        if (current_step >= steps) {
                            next.hide();
                        } else {
                            next.show();
                        }

                        // navs
                        if (options.show_nav) {
                            var current_nav = slider_nav.find('a').eq(current_step - 1);
                            slider_nav.find('a').removeClass('active');
                            current_nav.addClass('active');
                        }
                    }

                    function play() {
                        clearInterval(timer);
                        timer = setInterval(function() {
                            if (current_step == steps) {
                                move(1);
                            } else {
                                move(current_step + 1);
                            }
                        }, options.interval);
                    }

                    function stop() {
                        clearInterval(timer);
                    }

                    initialize();
                });

            };

            $.fn.flexboxslider.defaults = {
                max_height:250,
                items:4,
                timer: true,
                interval: 5000,
                show_nav: true,
                animation_duration: 500,
                easing: 'swing',
                small_screen:600,
                tablet:768
            };


        })(jQuery);
        $(document).ready(function() {

            $('#slider-2').flexboxslider({
                max_height: 300,
                // items:3,
                timer: false
            });
        });
    </script>
{{--============script pop up item ============--}}
    <script>
        $(document).ready(function(){
//            $('.pop-up').hide();
//            $('.pop-up').fadeOut(-999999999);
            $('.open-button').click(function (e) {
                $('.pop-up').removeClass('hidden');
                $('.cover-add').addClass('cover');

                $('.pop-up').fadeIn(100);
                $('#overlay').addClass('blur-in');
                $('#overlay').removeClass('blur-out');
                e.stopPropagation();
            });
            $('.close-button').click(function (e) {
                $('.pop-up').fadeOut(100);
                $('#overlay').removeClass('blur-in');
                $('#overlay').addClass('blur-out');
                $('.cover-add').removeClass('cover');
                $('.pop-up').addClass('hidden');
                e.stopPropagation();
            });
        });
        $(document).ready(function(){
            $('.open-button2').click(function (e) {
                $('.pop-up2').removeClass('hidden');
                $('.cover-add').addClass('cover');
                $('.pop-up2').fadeIn(100);
                $('#overlay').addClass('blur-in');
                $('#overlay').removeClass('blur-out');
                e.stopPropagation();
            });
            $('.close-button2').click(function (e) {
                $('.pop-up2').fadeOut(100);
                $('#overlay').removeClass('blur-in');
                $('#overlay').addClass('blur-out');
                $('.cover-add').removeClass('cover');
                $('.pop-up').addClass('hidden');
                e.stopPropagation();
            });
        });
    </script>
@endsection