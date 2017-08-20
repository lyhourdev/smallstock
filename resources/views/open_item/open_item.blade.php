
<?php
?>
<div class="row">
    <div class="col-md-6">
            @include('open_item.fields.my_text',array('field' =>[
                                                    'name' => 'open_number',
                                                    'label' => 'Open Number',
                                                    'value' => isset($crud->entry->open_number)?$crud->entry->open_number:''
                                                    ]))

        <!-- /input-group -->
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-md-6">
            @include('open_item.fields.my_date_picker',array('field' =>[   // date_picker
           'name' => '_date_',
           'type' => 'date_picker',
           'label' => 'Open Date',
           'my_script' => 1,
           'value' => isset($crud->entry->_date_)?$crud->entry->_date_:''
        ]))
        <!-- /input-group -->
    </div>
    <!-- /.col-lg-6 -->
</div>