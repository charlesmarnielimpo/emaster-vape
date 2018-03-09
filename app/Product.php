<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Product_images;

class Product extends Model
{
	public function categories()
	{
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}

	public function product_image()
  {
  	return $this->hasMany('App\Product_images', 'product_id', 'id');
  }

  public function priceFormat()
  {
  	return number_format($this->price, 2);
  }
}
