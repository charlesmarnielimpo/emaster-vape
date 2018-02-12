<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->hasOne('App\Product', 'category_id', 'id');
    }

    public function setCategoryNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
}
