<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Cart as CartItem;

use Auth;

class Cart extends Component
{
    public function render()
    {
        $user = Auth::user()->id;
        $carts = CartItem::session($user)->getContent();
        $total = CartItem::session($user)->getTotal();
        return view('livewire.cart', compact('carts', 'total'));
    }
}
