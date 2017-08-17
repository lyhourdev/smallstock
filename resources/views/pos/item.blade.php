<?php
$category_id = isset($field['value']['category_id'])?$field['value']['category_id']:'';
$item_code = isset($field['value']['item_code'])?$field['value']['item_code']:'';
$title = isset($field['value']['title'])?$field['value']['title']:'';
$description = isset($field['value']['description'])?$field['value']['description']:'';
$unit = isset($field['value']['unit'])?$field['value']['unit']:'';
?>
<div class="row">
    <div class="col-md-6">
        <?php
        $field = [   // date_picker
            'name' => 'item_code',
            'type' => 'text',
            'label' => 'Item Code',
            'oneTime' => 0,
            'value' => $item_code,
            // optional:
        ];
        ?>
        @include('vendor.backpack.crud.customs.text2',compact('crud', 'entry', 'field'))
    </div>
    <div class="col-md-6">
        <?php
        $field = [
            'name' => 'title',
            'type' => 'text',
            'label' => 'Title',
            'oneTime' => 0,
            'value' => $title,
        ];
        ?>
        @include('vendor.backpack.crud.customs.text2',compact('crud', 'entry', 'field'))
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        <?php

        $field = [
            'name' => 'unit',
            'type' => 'text',
            'label' => 'Unit',
            'oneTime' => 0,
            'value' => $unit,
        ];
        ?>
        @include('vendor.backpack.crud.customs.text2',compact('crud', 'entry', 'field'))
    </div>

    <div class="col-md-6">
        <?php
        $field = [
            // 1-n relationship
            'label' => "Category Name", // Table column heading
            'type' => "select2_from_ajax",
            'name' => 'category_id', // the column that contains the ID of that connected entity
            'entity' => 'item_category', // the method that defines the relationship in your Model
            'attribute' => "title", // foreign key attribute that is shown to user
            'model' => "App\Models\ItemCategory", // foreign key model
            'data_source' => url("admin/api/item-category"), // url to controller search function (with /{id} should return model)
            'placeholder' => "Select a item category", // placeholder for the select
            'minimum_input_length' => 0, // minimum characters to type before querying results
            'oneTime' => 1,
            'value' => $category_id,
        ];
        ?>
        @include('vendor.backpack.crud.customs.select2_from_ajax2',compact('crud', 'entry', 'field'))
    </div>

</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3" placeholder="Enter ..." >{{ $description }}</textarea>
    </div>
</div>