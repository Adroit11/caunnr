<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function model()
    {
        return $this->belongsTo('App\Model');
    }
}
