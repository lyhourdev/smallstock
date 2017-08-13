<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpenItems;
use App\Models\OpenItemsDetail;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\OpenItemsRequest as StoreRequest;
use App\Http\Requests\OpenItemsRequest as UpdateRequest;

class OpenItemsCrudController extends CrudController
{
    public function showDetailsRow($id){
//        $data = Itesm::select()->find($id);
        $data = OpenItemsDetail::find($id);

        return view('vendor.backpack.crud.details_row',['dada'=>$data]);
    }

    public function getOpenNumber() {
        $term = $this->request->input('term');
        $options = OpenItems::where('open_number', 'like', '%'.$term.'%')->get();
        return $options->pluck('open_number', 'open_number');
    }

    public function getUser() {
        $term = $this->request->input('term');
        $options = User::where('name', 'like', '%'.$term.'%')->get();
        return $options->pluck('name', 'id');
    }

    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\OpenItems');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/open-items');
        $this->crud->setEntityNameStrings('Open Items', 'Open Item');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->addColumn([
            'name' => 'open_number',
            'label' => 'Open Number',
        ]);

        $this->crud->addColumn([
            'name' => '_date_',
            'label' => 'Open Date',
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'label' => 'description',
        ]);

        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Created At',
        ]);

        $this->crud->addColumn([
            'name' => 'user_id',
            'label' => 'User',
        ]);

        $this->crud->addColumn([
            'label' => _t('User'),
            'type' => 'select',
            'name' => 'user_id',
            'entity' => 'userTitle',
            'attribute' => 'name',
            'model' => "App\Models\User",
        ]);





        $this->crud->addField([
            'name' => 'test',
            'label' => 'Open Number',
            'type' => 'view',
            'view' => 'test',
        ]);

//        $this->crud->addField([
//            'name' => 'open_number',
//            'label' => 'Open Number',
//            'type' => 'text',
//        ]);
//
//        $this->crud->addField([   // date_picker
//            'name' => 'open_date',
//            'type' => 'date_picker',
//            'label' => 'Open Date',
//
//        ]);
//
        $this->crud->addField([
            'name' => 'description',
            'label' => 'description',
            'type' => 'textarea',
        ]);



        $this->crud->addField([
            'name' => 'item',
            'label' => 'Item',
            'type' => 'items',
            'price' => true,
        ]);

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'open_number',
            'type' => 'select2_ajax',
            'label'=> 'Open Number',
            'placeholder' => 'Pick a Open Number'
        ],
            url('admin/ajax-open-item-number'), // the ajax route
            function($value) { // if the filter is active
                $this->crud->addClause('where', 'open_number', $value);
            });

        $this->crud->addFilter([ // daterange filter
            'type' => 'date_range',
            'name' => '_date_',
            'label'=> 'Open Date'
        ],
            false,
            function($value) { // if the filter is active, apply these constraints
                $dates = json_decode($value);
                $this->crud->addClause('where', '_date_', '>=', $dates->from);
                $this->crud->addClause('where', '_date_', '<=', $dates->to);
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

        $this->crud->addFilter([ // select2_ajax filter
            'name' => 'user_id',
            'type' => 'select2_ajax',
            'label'=> 'User',
            'placeholder' => 'Pick a User'
        ],
            url('admin/ajax-open-item-user'), // the ajax route
            function($value) { // if the filter is active
                $this->crud->addClause('where', 'user_id', $value);
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
         $this->crud->enableDetailsRow();
         $this->crud->allowAccess('details_row');
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
         $this->crud->enableAjaxTable();

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
//        dd($request->item);
        $this->crud->request->request->add(['user_id'=>getUserID()]);
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
