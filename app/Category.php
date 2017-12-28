<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name'
    ];

    public function setCategoryNameAttribute($value)
    {
        $this->attributes['category_name'] = ucwords($value);
    }
}
