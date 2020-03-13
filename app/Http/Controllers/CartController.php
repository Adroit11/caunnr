<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::session(2)->getContent();
        return view('home');
    }

    public function store($product_id)
    {
        $user = 2;
        $product = Item::find($product_id);
        $price = $product->price - ($product->price * ($product->discount / 100));
        Cart::session($user)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $price,
            'quantity' => 1,
            'attributes' => array(
                                    'color' => $product->color,
                                    'image' => $product->image,
                                    'discount' => $product->discount,
                                    'description' => $product->description,
                                ),
            'associatedModel' => $product
        ));
        $items = Cart::getContent();
        return redirect('cart');
    }

    public function delete($product)
    {
        Cart::session(2)->remove($product);
        return redirect('/');
    }

    public function favourite($product)
    {
        $item = Item::find($product);
        $item->addFavorite(2);
        return back();
    }
}
