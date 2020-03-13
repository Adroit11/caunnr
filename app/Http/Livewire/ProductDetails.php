<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Item;
use App\Model;

class ProductDetails extends Component
{
    public $image;
    public $name;
    public $description;
    public $color;
    public $price;
    public $notes;
    public $discount;
    public $next;
    public $previous;
    public $product_id;

    public function mount($slug)
    {
        $product = Item::where('slug', '=', $slug)->first();
        $next = Item::where('id', '>', $product->id)->min('id');
        $previous = Item::where('id', '<', $product->id)->max('id');
        $next_slug = Item::find($next);
        $previous_slug = Item::find($previous);
        $this->product_id = $product->id;
        $this->image = $product->image;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->discount = $product->discount;
        $this->color = $product->color;
        $this->notes = $product->notes;
        $this->model = $product->model_id;
        if(!is_null($next_slug)){
            $this->next = $next_slug->slug;
        }else{
            $this->next = Null;
        }
        if(!is_null($previous_slug)){
            $this->previous = $previous_slug->slug;
        }else{
            $this->previous = Null;
        }
    }
    public function render()
    {
        $suggested = Item::where('model_id', '=', $this->model)
                    ->take(5)
                    ->inRandomOrder()
                    ->get();
        return view('livewire.product-details', ['related' => $suggested]);
    }
}
