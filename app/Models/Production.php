<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Production extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'production';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = ['production_number','_date_','customer_id','ref','description'];
    // protected $hidden = [];
    // protected $dates = [];

    protected $appends = [
        'data' => [],
    ];

    public function getDataAttribute() {
        $data = [
            'id' => $this->id,
            'production_number' => $this->production_number,
            '_date_' => $this->_date_,
            'customer_id' => $this->customer_id,
            'ref' => $this->ref,
            'description' => $this->description,
        ];
        return $data;
    }

    public function setDataAttribute($value) {
        $this->attributes['data'] = $value;
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customers', 'customer_id');
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
