<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Item extends Model
{
    use Favoriteable; 
    
    public function model()
    {
        return $this->belongsTo('App\Model');
    }
}
