<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Product;


class SearchBar extends Component
{
    public $query;
    public $products;

    public function mount()
    {
        $this->query = '';
        $this->products = '';
    }

    public function updatedQuery()
    {
        $this->products = Product::join('models', 'products.id', '=', 'models.product_id')
                            ->join('items', 'models.id', '=', 'items.model_id')
                            ->where('items.name', 'like', "%". $this->query ."%")
                            ->orWhere('models.name', 'like', "%". $this->query ."%")
                            ->orWhere('products.name', 'like', "%". $this->query ."%")
                            ->select('items.*')
                            ->take(10)
                            ->get()
                            ->toArray();
    }
    public function render()
    {
        return view('livewire.search-bar');
    }
}
