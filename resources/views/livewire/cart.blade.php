<div class="flex flex-col py-2 px-10 w-full">
    @foreach($carts as $cart)
        <div class="flex flex-col my-4">
            <div class="flex w-full text-gray-600 font-semibold py-2">
                <div class="w-5/12">
                    <span>Product</span>
                </div>
                <div class="w-3/12 border-r">
                    <span>Quantity</span>
                </div>
                <div class="w-2/12 border-r">
                    <span>Unit Price</span>
                </div>
                <div class="w-2/12">
                    <span>Sub Total</span>
                </div>
            </div>
            <div class="flex w-full bg-white py-10 px-6">
                <div class="w-1/12">
                    <img style="height: 100px;" src="{{asset('assets/gadget/'.$cart->attributes->image)}}" />
                </div>
                <div class="w-4/12 p-4 flex flex-col border-r">
                    <div class="w-full">
                        <h3 class="font-semibold text-lg">{{$cart->name}}</h3>
                        <span class="font-medium text-xs">{{$cart->attributes->description}} - {{$cart->attributes->color}}</span>
                    </div>
                    <div class="w-full flex mt-2">
                        <div class="w-1/2 flex py-2">
                            <img style="height: 20px;" src="{{asset('assets/icons/favorite.svg')}}" alt="add to favourite">
                            <span class="px-2 text-xs">Add to wishlist
                        </div>
                        <div class="w-1/2">
                            <a href="{{url('/delete/'.$cart->id)}}">
                                <div class="w-1/2 flex py-2">
                                    <img style="height: 20px;" src="{{asset('assets/icons/Cancel.svg')}}" alt="add to favourite">
                                    <span class="px-2 text-xs text-orange font-semibold">Remove
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-3/12 border-r flex justify-center item-center text-center py-6">
                    <input class="border-b" type="text" value="{{$cart->quantity}}">
                </div>
                <div class="w-2/12 border-r text-center px-4 py-6">
                    <span class="font-semibold text-medium">
                        NGN {{number_format($cart->price, 2)}}
                    </span>
                    <p class="text-orange text-xs">Saving: {{$cart->attributes->discount}}%</p>
                </div>
                <div class="w-2/12 text-center px-4 py-6">
                    <span class="font-bold text-medium text-orange">
                        NGN {{number_format($cart->price * $cart->quantity, 2)}}
                    </span>
                </div>
            </div>
        </div>
    @endforeach
    <div class="flex flex-col my-4">
        <div class="flex w-full text-gray-600 font-semibold py-2">
            <div class="w-4/5"></div>
            <div class="w-1/5">
                Total: <span>NGN {{number_format($total, 2)}}</span>
                <p class="font-thin text-xs text-black">Shipping fees not included</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col my-4">
        <div class="flex w-full bg-white">
            <div class="w-3/5"></div>
            <div class="w-2/5 py-6 flex">
                <a href="{{url('/')}}">
                    <button class="border text-orange p-4 mx-4">Continue Shopping</button>
                </a>
                <form method="POST" action="{{ route('checkout') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                    @csrf
                    <input type="hidden" name="email" value="boladeadio@gmail.com">
                    <input type="hidden" name="orderID" value="345">
                    <input type="hidden" name="amount" value="{{$total*100}}">
                    <input type="hidden" name="quantity" value="3">
                    <input type="hidden" name="metadata" value="{{ json_encode(array('products' => $carts)) }}" >
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
                    <button type="submit" class="bg-main-orange text-white p-4">Proceed to checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
