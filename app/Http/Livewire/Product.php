<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product as Categories;

class Product extends Component
{
    public function render()
    {
        $products = Categories::all();
        $count = 1;
        return view('livewire.product', [
            'products' => $products,
            'count' => $count,
        ]);
    }
}
