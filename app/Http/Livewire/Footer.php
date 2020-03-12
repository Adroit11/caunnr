<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class Footer extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.footer',[
            'products' => $products
        ]);
    }
}
