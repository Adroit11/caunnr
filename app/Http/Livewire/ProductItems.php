<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductItems extends Component
{
    public $name;
    public $alt;
    public $image;
    public $price;
    public $color;
    public $description;
    public $discount;
    public $selling_price;
    public $rating;
    
    public function mount($model)
    {
        $this->name = $model->name;
        $this->alt = $model->slug;
        $this->image = $model->image;
        $this->color = $model->color;
        $this->description = $model->description;
        $this->price = $model->price;
        $this->discount = $model->discount;
        $this->selling_price = ($model->price - (($model->discount/ 100) * $model->price));
        $this->rating = $model->rating;
    }
    public function render()
    {
        return view('livewire.product-items');
    }
}
