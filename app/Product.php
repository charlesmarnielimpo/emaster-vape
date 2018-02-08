<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Images;

class Product extends Model
{
  public function product_image()
  {
  	return $this->hasMany('App\Product_images');
  }
}
