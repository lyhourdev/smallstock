<div class="m-t-10 m-b-10 p-l-10 p-r-10 p-t-10 p-b-10">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Item Table</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 80px;">
                            {{--<a hidden="#" class="btn btn-block btn-primary btn-sm" id="btn-add-new">Add New</a>--}}
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding" id="all-table">
                    {{--style="border-left:6px solid #ccc!important; border-color: #2196F3!important; background-color: #ddffff!important;"--}}
                </div>
                <!-- /.box-body -->
            </div>
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

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <!-- include select2 js-->
        <script src="{{ asset('vendor/adminlte/plugins/select2/select2.min.js') }}"></script>
        <script>
             var name__ = "{{$field['name']}}";

             function getSellect2(obj) {
                 $(".select2_field").each(function (i, obj) {
                     if (!$(obj).hasClass("select2-hidden-accessible"))
                     {
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

            function getHtmlTable(){
                var i1 = getRNum();
                var html = '<tr>\n' +
                    //                    '                            <td style="width: 20px;">'+detID_+'</td>\n' +
                    '                            <td>\n' +
                    '                                <select name="data_'+name__+'['+i1+'][item_id]" style="width: 100%"\n' +
                    '                                        class="form-control select2_field">\n' +
                    '                                   <option value="0"></option>' +
                    '                                </select>\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" name="data_'+name__+'['+i1+'][unit]" value="" class="form-control">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" name="data_'+name__+'['+i1+'][qty]" class="form-control">\n' +
                    '                            </td>\n' +
                    <?php if ($field['price'] == true){ ?>
                        '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" name="data_'+name__+'['+i1+'][price]" value="" class="form-control">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" value="" class="form-control">\n' +
                    '                            </td>\n' +
                    <?php }?>
                        '                            <td style="width: 80px;">\n' +
                    '                                <a href="#" class="btn btn-xs btn-primary btn-flat btn-add-sub" data-i1="'+i1+'">+</a>\n' +
                    '                                <a href="#" class="btn btn-xs btn-danger btn-flat btn-del">+</a>\n' +
                    '                            </td>\n' +
                    '                        </tr>';
                return html;

            }

            function getHtmlTableSub(i1){
               var i3 = getRNum();
               var i4 = getRNum();
               var html = '<tr>\n' +
                    //                    '                            <td style="width: 20px;">'+detID_+'</td>\n' +
                    '                            <td>\n' +
                    '                                <select name="data_'+name__+'['+i1+'][option]['+i3+'][item_id]" style="width: 100%"\n' +
                    '                                        class="form-control select2_field">\n' +
                    '                                   <option value="0"></option>' +
                    '                                </select>\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" name="data_'+name__+'['+i1+'][option]['+i3+'][unit]" value="" class="form-control">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" name="data_'+name__+'['+i1+'][option]['+i3+'][qty]" value="" class="form-control">\n' +
                    '                            </td>\n' +
                    <?php if ($field['price'] == true){ ?>
                        '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" name="data_'+name__+'['+i1+'][option]['+i3+'][price]" value="" class="form-control">\n' +
                    '                            </td>\n' +
                    '                            <td style="width: 80px;">\n' +
                    '                                <input type="text" value="" class="form-control">\n' +
                    '                            </td>\n' +
                    <?php }?>
                        '                            <td style="width: 80px;">\n' +
                    '                                <a href="#" class="btn btn-xs btn-primary btn-flat" disabled="disabled">+</a>\n' +
                    '                                <a href="#" class="btn btn-xs btn-danger btn-flat btn-del">+</a>\n' +
                    '                            </td>\n' +
                    '                        </tr>';
                return html;

            }

            function getTable(tbody){
                var table = '<table class="table table-hover">\n' +
                    '                                                    <tbody id="'+tbody+'">\n' +
                    '                                                        <tr>\n' +
                    //                    '                                                            <th>ID</th>\n' +
                    '                                                            <th>Item</th>\n' +
                    '                                                            <th>Unit</th>\n' +
                    '                                                            <th>Qty</th>\n' +
                    <?php if ($field['price'] == true){ ?>
                        '                                                            <th>Price</th>\n' +
                    '                                                            <th>Total</th>\n' +
                    <?php }?>
                        '                                                            <th><a hidden="#" class="btn btn-xs btn-primary btn-flat btn-add-new" data-sub_check="'+tbody+'" data-nn="0">+</a></th>\n' +
                    //                    '                                                            <th></th>\n' +
                    '                                                        </tr>\n' +
                    '                                                    </tbody>\n' +
                    '                                                </table>';

                return table;
            }//table-tbody

            jQuery(document).ready(function ($) {
                $('#all-table').append(getTable('table-tbody'));
                $('#table-tbody').append(getHtmlTable());

                $('body').delegate('.btn-add-new','click',function (e) {
                    e.preventDefault();
                    var value__ = $(this).data("sub_check");
                    if(value__ == 'table-tbody'){

                        $(this).parentsUntil('tr').parent().parent().append(getHtmlTable());
                         //setter
                    }else{

                        $(this).parentsUntil('tr').parent().parent().append(getHtmlTableSub($(this).data('i1')));
                    }


                });

                $('body').delegate('.btn-del','click',function (e) {
                    e.preventDefault();
                    $(this).parentsUntil('tr').parent().next('.c__').remove();
                    $(this).parent().parent().remove();

                });

                $('body').delegate('.btn-add-sub','click',function (e) {
                    e.preventDefault();
                    var main_id = $(this).data('i1');
                    if($(this).html() == '+'){

                        var table = '<table class="table table-hover">\n' +
                            '                                                    <tbody id="xnxx">\n' +
                            '                                                        <tr>\n' +
                            //                    '                                                            <th>ID</th>\n' +
                            '                                                            <th>Item</th>\n' +
                            '                                                            <th>Unit</th>\n' +
                            '                                                            <th>Qty</th>\n' +
                            <?php if ($field['price'] == true){ ?>
                                '                                                            <th>Price</th>\n' +
                            '                                                            <th>Total</th>\n' +
                            <?php }?>
                                '                                                            <th><a hidden="#" class="btn btn-xs btn-primary btn-flat btn-add-new" data-sub_check="xnxx" data-i1="'+main_id+'">+</a></th>\n' +
                            //                    '                                                            <th></th>\n' +
                            '                                                        </tr>\n'+
                            '                                                    </tbody>\n' +
                            '                                                </table>';

                        var html = '<tr class="c__" data-tr="0">' +
                            '<td colspan="6" style="border-left:6px solid #ccc!important; border-color: #2196F3!important; background-color: #ddecff!important;">' +
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
                    }else{
                        $(this).parentsUntil('tr').parent().next().remove();
                        $(this).html('+');
                    }

                });
            });



        </script>
    @endpush

@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}


