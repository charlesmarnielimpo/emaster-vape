<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;

class Municipality extends Model
{
  public function province()
  {
  	return $this->belongsTo('App\Province', 'province_id', 'id');
  }
}
