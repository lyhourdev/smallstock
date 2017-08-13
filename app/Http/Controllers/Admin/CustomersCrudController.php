<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customers;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CustomersRequest as StoreRequest;
use App\Http\Requests\CustomersRequest as UpdateRequest;

class CustomersCrudController extends CrudController
{

    public function getPhones() {
        $term = $this->request->input('term');
        $options = Customers::where('phone', 'like', '%'.$term.'%')->get();
        return $options->pluck('phone', 'phone');
    }

    public function getName() {
        $term = $this->request->input('term');
        $options = Customers::where('name', 'like', '%'.$term.'%')->get();
        return $options->pluck('name', 'name');
    }

    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Customers');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/customers');
        $this->crud->setEntityNameStrings('Customers', 'Customer');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addColumn([
            'name' => 'gender',
            'label' => 'Gender',
        ]);

        $this->crud->addColumn([
            'name' => 'phone',
            'label' => 'Phone',
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'label' => 'Description',
        ]);

        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Created At',
        ]);

        $this->crud->addField([
            'name' => 'name',
            'label' => 'Name',
        ]);

        $this->crud->addField([
            // select_from_array
            'name' => 'gender',
            'label' => "Gender",
            'type' => 'select2_from_array',
            'options' => ['Male' => _t('Male'), 'Female' => _t('Female')],
            'allows_null' => false,
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'label' => 'Phone',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
        ]);

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'name',
            'type' => 'select2_ajax',
            'label'=> 'Name',
            'placeholder' => 'Pick a Name'
        ],
            url('admin/ajax-customer-name'), // the ajax route
            function($value) { // if the filter is active
                $this->crud->addClause('where', 'name', $value);
            });

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'phone',
            'type' => 'select2_ajax',
            'label'=> 'Phone',
            'placeholder' => 'Pick a Phone'
        ],
            url('admin/ajax-customer-phone'), // the ajax route
            function($value) { // if the filter is active
                 $this->crud->addClause('where', 'phone', $value);
            });

        $this->crud->addFilter([ // dropdown filter
            'name' => 'gender',
            'type' => 'dropdown',
            'label'=> 'Gender'
        ], [
            'Male' => _t('Male'),
            'Female' => _t('Female')
        ], function($value) { // if the filter is active
             $this->crud->addClause('where', 'gender', $value);
        });

        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => 'created_at',
            'label'=> 'Created At'
        ],
            false,
            function($value) { // if the filter is active, apply these constraints
                 $dates = json_decode($value);
                 $this->crud->addClause('where', 'created_at', '>=', $dates->from);
                 $this->crud->addClause('where', 'created_at', '<=', $dates->to);
            });


//        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
         $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
