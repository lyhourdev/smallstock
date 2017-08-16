<div class="col-md-12">
    <div class="col-md-6">
        <?php
        $field = [   // date_picker
            'name' => 'production_number',
            'type' => 'text',
            'label' => 'Production Number',
            'oneTime' => 0,
            // optional:
        ];
        ?>
        @include('vendor.backpack.crud.customs.text2',compact('crud', 'entry', 'field'))
    </div>
    <div class="col-md-6">
        <?php
        $field = [
            'name' => '_date_',
            'type' => 'date_picker',
            'label' => 'Production Date',
            'oneTime' => 1,
        ];
        ?>
        @include('vendor.backpack.crud.customs.date_picker2',compact('crud', 'entry', 'field'))
    </div>
</div>
<div class="col-md-12">
    <div class="col-md-6">
        <?php
        $field = [
            // 1-n relationship
            'label' => "Customer Production", // Table column heading
            'type' => "select2_from_ajax",
            'name' => 'customer_id', // the column that contains the ID of that connected entity
            'entity' => 'customer', // the method that defines the relationship in your Model
            'attribute' => "name", // foreign key attribute that is shown to user
            'model' => "App\Models\Customers", // foreign key model
            'data_source' => url("admin/api/customer"), // url to controller search function (with /{id} should return model)
            'placeholder' => "Select a customer", // placeholder for the select
            'minimum_input_length' => 0, // minimum characters to type before querying results
            'oneTime' => 1,
        ];
        ?>
        @include('vendor.backpack.crud.customs.select2_from_ajax2',compact('crud', 'entry', 'field'))
    </div>
    <div class="col-md-6">
        <?php
        $field = [
            'name' => 'ref',
            'type' => 'text',
            'label' => 'Production Reference',
            'oneTime' => 0,
        ];
        ?>
        @include('vendor.backpack.crud.customs.text2',compact('crud', 'entry', 'field'))
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..." ></textarea>
    </div>
</div>