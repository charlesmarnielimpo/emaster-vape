<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Municipality;

class Province extends Model
{
  public function municipality()
  {
  	return $this->hasMany('App\Municipality', 'province_id', 'id');
  }
}
