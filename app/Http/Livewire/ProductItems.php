<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductItems extends Component
{
    public $name;
    public function mount($model)
    {
        $this->name = $model->name;
    }
    public function render()
    {
        return view('livewire.product-items');
    }
}
