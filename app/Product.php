<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function priceFormat()
  {
  	return number_format($this->price, 2);
  }
}
