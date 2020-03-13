<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Cart;

use App\Favorite;

class Header extends Component
{
    public function render()
    {
        $user = 2;
        $total_cart = Cart::session($user)->getContent()->count();
        $total_favorite = Favorite::where('user_id', '=', $user)->count();
        return view('livewire.header', compact('total_cart', 'total_favorite'));
    }
}
