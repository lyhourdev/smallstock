<div class="col-md-6">
    <div class="form-group">
        <label for="exampleInputEmail1">Open Number</label>
        <input type="email" class="form-control" id="exampleInputEmail1">
    </div>
</div>
<div class="col-md-6">
        <?php
        $field = [   // date_picker
            'name' => '_date_',
            'type' => 'date_picker',
            'label' => 'Date SSS',
            'oneTime' => 1,
            // optional:
        ];
        ?>
        @include('vendor.backpack.crud.customs.date_picker2',compact('crud', 'entry', 'field'))
</div>
