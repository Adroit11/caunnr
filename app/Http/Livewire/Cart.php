<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Cart as CartItem;

class Cart extends Component
{
    public function render()
    {
        $carts = CartItem::session(2)->getContent();
        $total = CartItem::session(2)->getTotal();
        return view('livewire.cart', compact('carts', 'total'));
    }
}
