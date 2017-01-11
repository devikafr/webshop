<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // can be connected to database with this command
    public $timestamps = false;

    public function creator()
    {
      return $this->hasOne('App\Creator');
    }

}
