<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Invoice extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'invoice';
    protected $primaryKey = 'id';
     public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = ['invoice_number', '_date_', 'customer_id', 'description', 'deposit', 'status','complete_date', 'complete_price'];
    // protected $hidden = [];
    // protected $dates = [];

    protected $attributes = [
        'data' => [],
    ];

    public function getDataAttribute() {
        $data = [
            'id' => $this->id,
            'invoice_number' => $this->invoice_number,
            '_date_' => $this->_date_,
            'customer_id' => $this->customer_id,
            'description' => $this->description,
            'deposit' => $this->deposit,
            'status' => $this->status,
            'complete_date' => $this->complete_date,
            'complete_price' => $this->complete_price,
        ];
        return $data;
    }

    public function setDataAttribute($value) {
        $this->attributes['data'] = $value;
    }
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function customer()
    {
        return $this->belongsTo('App\Models\Customers', 'customer_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
