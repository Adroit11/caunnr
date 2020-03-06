<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Models;

class Model extends Models
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
