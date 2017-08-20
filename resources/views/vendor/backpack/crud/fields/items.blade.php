<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Item Table</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 100px;">
                        {{--<a hidden="#" class="btn btn-block btn-primary btn-sm" id="btn-add-new">Add New</a>--}}
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            @if(isset($open_items_detail))
                <div class="box-body table-responsive no-padding" id="all-table">
                    <table class="table table-hover">
                    <tbody id="table-tbody">
                    <tr>
                        <th>Item</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>note</th>
                        <th><a hidden="#" class="btn btn-xs btn-primary btn-flat btn-add-new" data-sub_check="table-tbody"
                               data-nn="0">+</a></th>
                    </tr>
                    @foreach($open_items_detail as $row)
                        <?php
                            $r = \App\Helpers\StaticHelper::getR();
                            $item_code_ = \App\Helpers\StaticHelper::getItemTitle($row->item_id)->item_code;
                            $item_title_ = \App\Helpers\StaticHelper::getItemTitle($row->item_id)->title;
                            $unit_ = \App\Helpers\StaticHelper::getItemTitle($row->item_id)->unit;
                            $iidd =  isset(\App\Helpers\StaticHelper::getItemTitle($row->item_id)->id)?\App\Helpers\StaticHelper::getItemTitle($row->item_id)->id:0;
                            $ttooaall = $row->cost * $row->qty;
                        ?>
                        <tr>
                            <input type="hidden" name="data_item[{{$r}}][open_detail_id_]" style="width: 100%" class="form-control item_code" value="{{$row->id}}">
                            <input type="hidden" name="data_item[{{$r}}][id]" style="width: 100%" class="form-control item_code" value="{{$iidd}}">
                            <td>
                                <input name="data_item[{{$r}}][item_code]" style="width: 100%" class="form-control item_code" value="{{$item_code_}}">
                            </td>
                            <td>
                                <input name="data_item[{{$r}}][item_title]" style="width: 100%" class="form-control item_title" value="{{$item_title_}}">
                            </td>
                            <td style="width: 100px;">
                                <input type="text" name="data_item[{{$r}}][unit]" class="form-control unit" value="{{$unit_}}">
                            </td>
                            <td style="width: 100px;">
                                <input type="number" name="data_item[{{$r}}][qty]" class="form-control qty" value="{{$row->qty}}">
                            </td>
                            <td style="width: 100px;">
                                <input type="number" name="data_item[{{$r}}][price]" value="{{$row->cost}}" class="form-control price">
                            </td>
                            <td style="width: 100px;">
                                <input type="number" value="{{$ttooaall}}" class="form-control total">
                            </td>
                            <td style="width: 180px;">
                                <input type="text" name="data_item[{{$r}}][note]" value="" class="form-control qty">
                            </td>
                            <td style="width: 100px;">
                                <a href="#" class="btn btn-xs btn-primary btn-flat btn-add-sub" data-i1="{{$r}}">+</a>
                                <a href="#" class="btn btn-xs btn-danger btn-flat btn-del">-</a>
                            </td>
                        </tr>
                        @if(count(json_decode($row->item_detail,true)) > 0)
                                <tr class="c__" data-tr="0">
                                    <td colspan="8"
                                        style="border-left:6px solid #ccc!important; border-color: #2196F3!important; background-color: #ddecff!important;">
                                        <div class="table_row_slider" style="">
                                            <div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <table class="table table-hover">
                                                            <tbody id="xnxx">
                                                            <tr>
                                                                <th>Item</th>
                                                                <th>Name</th>
                                                                <th>Unit</th>
                                                                <th>Qty</th>
                                                                <th>Price</th>
                                                                <th>Total</th>
                                                                <th>note</th>
                                                                <th><a hidden="#" class="btn btn-xs btn-primary btn-flat btn-add-new"
                                                                       data-sub_check="xnxx" data-i1="{{$r}}">+</a></th>
                                                            </tr>
                                                            <?php
                                                            $r2 = \App\Helpers\StaticHelper::getR();
                                                            ?>
                                                            @foreach(json_decode($row->item_detail) as $row1)
                                                            <tr>
                                                                <input type="hidden" name="data_item[{{$r}}][option][{{$r2}}][item_code]"
                                                                       style="width: 150px" class="form-control item_code" value="{{$row1->item_code}}">
                                                                <td>
                                                                    <input name="data_item[{{$r}}][option][{{$r2}}][item_code]"
                                                                           style="width: 150px" class="form-control item_code" value="{{$row1->item_code}}">
                                                                </td>
                                                                <td>
                                                                    <input name="data_item[{{$r}}][option][{{$r2}}][item_title]"
                                                                           style="width: 200px" class="form-control item_title" value="{{$row1->title}}">
                                                                </td>
                                                                <td style="width: 100px;">
                                                                    <input type="text"
                                                                           name="data_item[{{$r}}][option][{{$r2}}][unit]"
                                                                           value="{{$row1->unit}}" class="form-control unit" >
                                                                </td>
                                                                <td style="width: 100px;">
                                                                    <input type="number"
                                                                           name="data_item[{{$r}}][option][{{$r2}}][qty]"
                                                                           value="{{$row1->qty}}" class="form-control qty">
                                                                </td>
                                                                <td style="width: 100px;">
                                                                    <input type="number"
                                                                           name="data_item[{{$r}}][option][{{$r2}}][price]"
                                                                           value="{{$row1->price}}" class="form-control price">
                                                                </td>
                                                                <td style="width: 100px;">
                                                                    <input type="number" value="{{$row1->qty * $row1->price}}" class="form-control total">
                                                                </td>
                                                                <td style="width: 180px;">
                                                                    <input type="text"
                                                                           name="data_item[{{$r}}][option][{{$r2}}][note]"
                                                                           value="" class="form-control qty">
                                                                </td>
                                                                <td style="width: 180px;">
                                                                    <a href="#" class="btn btn-xs btn-primary btn-flat" disabled="disabled">+</a>
                                                                    <a href="#" class="btn btn-xs btn-danger btn-flat btn-del">+</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                        @endif
                    @endforeach
                    </tbody>
                </table>
                </div>
            @else
                <div class="box-body table-responsive no-padding" id="all-table">
                    {{--style="border-left:6px solid #ccc!important; border-color: #2196F3!important; background-color: #ddffff!important;"--}}
                </div>
            @endif

            <!-- /.box-body -->
        </div>
    </div>
</div>
<div class="clearfix"></div>

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
        <!-- include select2 css-->
        <link href="{{ asset('vendor/adminlte/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
              rel="stylesheet" type="text/css"/>
    @endpush

    {{--FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- include select2 js-->
        <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
        <script src="{{ asset('vendor/adminlte/plugins/jQueryUI/jquery-ui.min.js') }}"></script>
        <script>
            $(".col-md-8").attr('class', 'col-md-12');
            $(".skin-blue-light").attr('class', 'skin-blue-light sidebar-mini   pace-done pace-done sidebar-collapse');
            var name__ = "{{$field['name']}}";

            function getSellect2(obj) {
                $(".select2_field").each(function (i, obj) {
                    if (!$(obj).hasClass("select2-hidden-accessible")) {
                        $(obj).select2({
                            theme: 'bootstrap',
                            multiple: false,
                            placeholder: "Select Item",
                            minimumInputLength: "0",
                            ajax: {
                                url: obj.url,
                                dataType: 'json',
                                quietMillis: 250,
                                data: function (params) {
                                    return {
                                        q: params.term
                                    };
                                },
                                processResults: function (data) {

                                    return {
                                        text: data.title,
                                        id: data.id
                                    };

                                }
                            }
                        });
                    }
                });
            }

            function getHtmlTable() {
                var i1 = getRNum();
                var html = '<tr>\n' +
                    //                    '                            <td style="width: 20px;">'+detID_+'</td>\n' +
//                    '                            <td>\n' +
//                    '                                <select name="data_' + name__ + '[' + i1 + '][item_code]" style="width: 150px"\n' +
//                    '                                        class="form-control item_code">\n' +
//                                        '                                   <option value="0"></option>' +
//                                        '                                </select>\n' +
//                    '                            </td>\n' +
                    '<td>\n' +
                    '                                <input name="data_' + name__ + '[' + i1 + '][item_code]" style="width: 100%"\n' +
                    '                                        class="form-control item_code">\n' +
                    //                    '                                   <option value="0"></option>' +
                    //                    '                                </select>\n' +
                    '                            </td>\n' +
                    '                            <td>\n' +
                    '                                <input name="data_' + name__ + '[' + i1 + '][item_title]" style="width: 100%"\n' +
                    '                                        class="form-control item_title">\n' +
                    //                    '                                   <option value="0"></option>' +
                    //                    '                                </select>\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 100px;">\n' +
                    '                                <input type="text" name="data_' + name__ + '[' + i1 + '][unit]" value="" class="form-control unit">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 100px;">\n' +
                    '                                <input type="number" name="data_' + name__ + '[' + i1 + '][qty]" value="0" class="form-control qty">\n' +
                    '                            </td>\n' +
                    <?php if ($field['price'] == true){ ?>
                        '                            <td style="width: 100px;">\n' +
                    '                                <input type="number" name="data_' + name__ + '[' + i1 + '][price]" value="0" class="form-control price">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 100px;">\n' +
                    '                                <input type="number" value="0" class="form-control total">\n' +
                    '                            </td>\n' +
                    <?php }?>
                        '                            <td style="width: 180px;">\n' +
                    '                                <input type="text" name="data_' + name__ + '[' + i1 + '][note]" value="" class="form-control qty">\n' +
                    '                            </td>\n' +
                        '                            <td style="width: 100px;">\n' +
                    '                                <a href="#" class="btn btn-xs btn-primary btn-flat btn-add-sub" data-i1="' + i1 + '">+</a>\n' +
                    '                                <a href="#" class="btn btn-xs btn-danger btn-flat btn-del">+</a>\n' +
                    '                            </td>\n' +
                    '                        </tr>';
                return html;

            }

            function getHtmlTableSub(i1) {
                var i3 = getRNum();
                var i4 = getRNum();
                var html = '<tr>\n' +
                    //                    '                            <td style="width: 20px;">'+detID_+'</td>\n' +
//                    '                            <td>\n' +
//                    '                                <select name="data_' + name__ + '[' + i1 + '][option][' + i3 + '][item_code]" style="width: 150px"\n' +
//                    '                                        class="form-control item_code">\n' +
//                                        '                                   <option value="0"></option>' +
//                                        '                                </select>\n' +   '' +
                    '<td>\n' +
                    '                                <input name="data_' + name__ + '[' + i1 + '][option][' + i3 + '][item_code]" style="width: 150px"\n' +
                    '                                        class="form-control item_code">\n' +
                    //                    '                                   <option value="0"></option>' +
                    //                    '                                </select>\n' +
                    '                            </td>\n' +
                    '                            <td>\n' +
                    '                                <input name="data_' + name__ + '[' + i1 + '][option][' + i3 + '][item_title]" style="width: 200px"\n' +
                    '                                        class="form-control item_title">\n' +
                    //                    '                                   <option value="0"></option>' +
                    //                    '                                </select>\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 100px;">\n' +
                    '                                <input type="text" name="data_' + name__ + '[' + i1 + '][option][' + i3 + '][unit]" value="" class="form-control unit">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 100px;">\n' +
                    '                                <input type="number" name="data_' + name__ + '[' + i1 + '][option][' + i3 + '][qty]" value="0" class="form-control qty">\n' +
                    '                            </td>\n' +
                    <?php if ($field['price'] == true){ ?>
                        '                            <td style="width: 100px;">\n' +
                    '                                <input type="number" name="data_' + name__ + '[' + i1 + '][option][' + i3 + '][price]" value="0" class="form-control price">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 100px;">\n' +
                    '                                <input type="number" value="" class="form-control total">\n' +
                    '                            </td>\n' +
                    <?php }?>
                        '                            <td style="width: 180px;">\n' +
                    '                                <input type="text" name="data_' + name__ + '[' + i1 + '][option][' + i3 + '][note]" value="" class="form-control qty">\n' +
                    '                            </td>\n' +
                        '                            <td style="width: 180px;">\n' +
                    '                                <a href="#" class="btn btn-xs btn-primary btn-flat" disabled="disabled">+</a>\n' +
                    '                                <a href="#" class="btn btn-xs btn-danger btn-flat btn-del">+</a>\n' +
                    '                            </td>\n' +
                    '                        </tr>';
                return html;

            }

            function getTable(tbody) {
                var table = '<table class="table table-hover">\n' +
                    '                                                    <tbody id="' + tbody + '">\n' +
                    '                                                        <tr>\n' +
                    //                    '                                                            <th>ID</th>\n' +
//                    '                                                            <th>Category</th>\n' +
                    '                                                            <th>Item</th>\n' +
                    '                                                            <th>Name</th>\n' +
                    '                                                            <th>Unit</th>\n' +
                    '                                                            <th>Qty</th>\n' +
                    <?php if ($field['price'] == true){ ?>
                        '                                                            <th>Price</th>\n' +
                    '                                                            <th>Total</th>\n' +
                    <?php }?>
                        '                                                            <th>note</th>\n' +
                    '                                                            <th><a hidden="#" class="btn btn-xs btn-primary btn-flat btn-add-new" data-sub_check="' + tbody + '" data-nn="0">+</a></th>\n' +
                    //                    '                                                            <th></th>\n' +
                    '                                                        </tr>\n' +
                    '                                                    </tbody>\n' +
                    '                                                </table>';

                return table;
            }//table-tbody

            jQuery(document).ready(function ($) {
                <?php if (!isset($open_items_detail)){ ?>
               $('#all-table').append(getTable('table-tbody'));
                $('#table-tbody').append(getHtmlTable());
                <?php }?>
                $('body').delegate('.btn-add-new', 'click', function (e) {
                    e.preventDefault();
                    var value__ = $(this).data("sub_check");
                    if (value__ == 'table-tbody') {

                        $(this).parentsUntil('tr').parent().parent().append(getHtmlTable());
                        //setter
                    } else {

                        $(this).parentsUntil('tr').parent().parent().append(getHtmlTableSub($(this).data('i1')));
                    }


                });

                $('body').delegate('.btn-del', 'click', function (e) {
                    e.preventDefault();
                    $(this).parentsUntil('tr').parent().next('.c__').remove();
                    $(this).parent().parent().remove();

                });

                $('body').delegate('.btn-add-sub', 'click', function (e) {
                    e.preventDefault();
                    var main_id = $(this).data('i1');
                    if ($(this).html() == '+') {

                        var table = '<table class="table table-hover">\n' +
                            '                                                    <tbody id="xnxx">\n' +
                            '                                                        <tr>\n' +
                            //                    '                                                            <th>ID</th>\n' +
//                            '                                                            <th>Category</th>\n' +
                            '                                                            <th>Item</th>\n' +
                            '                                                            <th>Name</th>\n' +

                            '                                                            <th>Unit</th>\n' +
                            '                                                            <th>Qty</th>\n' +
                            <?php if ($field['price'] == true){ ?>
                                '                                                            <th>Price</th>\n' +
                            '                                                            <th>Total</th>\n' +
                            <?php }?>
                                '                                                            <th>note</th>\n' +

                            '                                                            <th><a hidden="#" class="btn btn-xs btn-primary btn-flat btn-add-new" data-sub_check="xnxx" data-i1="' + main_id + '">+</a></th>\n' +
                            //                    '                                                            <th></th>\n' +
                            '                                                        </tr>\n' +
                            '                                                    </tbody>\n' +
                            '                                                </table>';

                        var html = '<tr class="c__" data-tr="0">' +
                            '<td colspan="8" style="border-left:6px solid #ccc!important; border-color: #2196F3!important; background-color: #ddecff!important;">' +
                            '<div class="table_row_slider" style="">' +
                            '<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">\n' +
                            '<div class="row">\n' +
                            '<div class="col-md-12">\n' +
                            table +
                            '</div>\n' +
                            '</div>\n' +
                            '</div>\n' +
                            '</div>' +
                            '</td>' +
                            '</tr>';

                        $(this).parentsUntil('tr').parent().after(html);
                        $(this).html('-');
                    } else {
                        $(this).parentsUntil('tr').parent().next().remove();
                        $(this).html('+');
                    }

                });
            });

            $('body').delegate('.item_code', 'click', function (e) {
                $(this).autocomplete({
                    source: function (request, response) {
                        $.ajax({
                            url: "http://gd.geobytes.com/AutoCompleteCity",
                            dataType: "jsonp",
                            data: {
                                q: request.term
                            },
                            success: function (data) {
                                response(data);
                            }
                        });
                    }
                });
            });

            $('body').delegate('.qty', 'change', function (e) {
                var qty = $(this).val();
                var price = $(this).parentsUntil('tr').parent().find('.price').val();
                var total = qty * price;
                $(this).parentsUntil('tr').parent().find('.total').val(total);
            });

            $('body').delegate('.price', 'change', function (e) {
                var price = $(this).val();
                var qty = $(this).parentsUntil('tr').parent().find('.qty').val();
                var total = qty * price;
                $(this).parentsUntil('tr').parent().find('.total').val(total);
            });

            $('body').delegate('.total', 'change', function (e) {

                var total = $(this).val();
                 var price = 0;
                if (total > 0){
                    var qty = $(this).parentsUntil('tr').parent().find('.qty').val();
                    price = total / qty;
                }else {
                    price = 0;
                }

                $(this).parentsUntil('tr').parent().find('.price').val(price);
            });


        </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}



