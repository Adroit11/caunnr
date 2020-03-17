<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Cart;

use App\Favorite;

use Auth;

class Header extends Component
{
    public function render()
    {
        if(Auth::check()) {
            $user = Auth::user()->id;
            $total_cart = Cart::session($user)->getContent()->count();
            $total_favorite = Favorite::where('user_id', '=', $user)->count();
        }else{
            $total_cart = 0;
            $total_favorite = 0;
        }
        return view('livewire.header', compact('total_cart', 'total_favorite'));
    }
}
