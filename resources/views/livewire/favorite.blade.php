<div class="flex flex-col py-2 px-10 w-full">
    @foreach($favorites as $favorite)
        <div class="flex flex-col my-4">
            <div class="flex w-full text-gray-600 font-semibold py-2">
                <div class="w-5/12">
                    <span>Product</span>
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
                    <img style="height: 100px;" src="{{asset('assets/gadget/'.$favorite->image)}}" />
                </div>
                <div class="w-4/12 p-4 flex flex-col border-r">
                    <div class="w-full">
                        <h3 class="font-semibold text-lg">{{$favorite->name}}</h3>
                        <span class="font-medium text-xs">{{$favorite->description}} - {{$favorite->color}}</span>
                    </div>
                    <div class="w-full flex mt-2">
                        <div class="w-1/2">
                            <a href="{{url('/delete/'.$favorite->id)}}">
                                <div class="w-1/2 flex py-2">
                                    <img style="height: 20px;" src="{{asset('assets/icons/Cancel.svg')}}" alt="add to favourite">
                                    <span class="px-2 text-xs text-orange font-semibold">Remove
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-2/12 border-r text-center px-4 py-6">
                    <span class="font-semibold text-medium">
                        NGN {{number_format($favorite->price, 2)}}
                    </span>
                    <p class="text-orange text-xs">Saving: {{$favorite->discount}}%</p>
                </div>
                <div class="w-2/12 text-center px-4 py-6">
                    <span class="font-bold text-medium text-orange">
                        NGN {{number_format($favorite->price * $favorite->quantity, 2)}}
                    </span>
                </div>
            </div>
        </div>
    @endforeach
</div>
