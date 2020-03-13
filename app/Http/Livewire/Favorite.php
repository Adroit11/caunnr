<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Favorite as Fav;

class Favorite extends Component
{
    public function render()
    {
        $favorites = Fav::all();
        dd($favorites);
        return view('livewire.favorite', compact('favorites'));
    }
}
