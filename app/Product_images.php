<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Product_images extends Model
{
  public function product()
  {
  	return $this->belongsTo('App\Products', 'product_id', 'id');
  }
}
