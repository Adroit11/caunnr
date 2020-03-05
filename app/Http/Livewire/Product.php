<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product as Categories;

class Product extends Component
{
    public function render()
    {
        $products = Categories::all();
        return view('livewire.product', [
            'products' => $products,
        ]);
    }
}
