<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use Cart;
use Auth;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::session(2)->getContent();
        return view('home');
    }

    public function store($product_id)
    {
        $user = Auth::user()->id;
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
        return redirect('cart');
    }

    public function delete($product)
    {
        $user = Auth::user()->id;
        Cart::session($user)->remove($product);
        return redirect('/');
    }

    public function favourite($product)
    {
        $user = Auth::user()->id;
        $item = Item::find($product);
        $item->addFavorite($user);
        return redirect('/');
    }
}
