<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Favorite as Fav;

class Favorite extends Component
{
    public function render()
    {
        $favorites = Fav::join('items', 'favorites.favoriteable_id', '=', 'items.id')
                        ->select('items.*')
                        ->get();
        return view('livewire.favorite', compact('favorites'));
    }
}
