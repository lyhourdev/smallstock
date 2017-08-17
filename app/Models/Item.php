<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class Item extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'items';
    protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
     protected $fillable = ['category_id','item_code','title','description','image','unit'];
    // protected $hidden = [];
    // protected $dates = [];


    protected $attributes = [
        'data' => [],
    ];

    public function getDataAttribute() {
        $data = [
            'id' => $this->id,
            'category_id' => $this->category_id,
            'item_code' => $this->item_code,
            'title' => $this->title,
            'description' => $this->description,
            'unit' => $this->unit,
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
    public function item_category()
    {
        return $this->belongsTo('App\Models\ItemCategory', 'category_id');
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";

        // if the image was erased
        if (($value==null && $this->id ==0) || ($this->id > 0 && $value != null && starts_with($value, 'data:image'))) {

            // delete the image from disk
            if(File::exists($this->image)) File::delete($this->image);

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            //dd(file_get_contents($value));
            $filename = rand(11111, 99999) . '_' . time() . '_' . rand(1000, 5000) . '.png';
            Image::make(file_get_contents($value))->save("uploads/$filename");

            $this->attributes[$attribute_name] = "uploads/$filename";
        }
    }


    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            //\Storage::disk('public_folder')->delete($obj->image);
            if(File::exists($obj->image)) File::delete($obj->image);
        });
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
