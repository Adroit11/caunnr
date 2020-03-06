<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function model()
    {
        return $this->hasMany('App\Model');
    }
}
