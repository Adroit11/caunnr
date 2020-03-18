<div class="md:relative">
    <input class="pl-10 p-3 w-full border border-gray-300" type="text" wire:model="query" placeholder="Search">
    @if(!empty($products))
        <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg">
            <ul class="p-6">
                @foreach($products as $product)
                    <li class="py-1">
                        <a class="px-2" href="{{url('product/'.$product['slug'])}}">
                            <div class="flex">
                                <div class="w-1/12 mr-2">
                                    <img class="w-full" src="{{asset('assets/gadget/'.$product['image'])}}" alt="{{$product['name']}} avatar"/>
                                </div>
                                <div class="w-11/12 flex flex-col">
                                    <div class="flex-1">
                                        <span class="font-semibold">{{$product['name']}}</span>
                                        <span>{{$product['description']}}</span>
                                    </div>
                                    <div class="flex-1 text-xs">
                                        <span class="font-bold">&#8358; {{number_format($product['price'] - ($product['price'] * ($product['discount']/100)), 2)}}</span>
                                        <span class="font-medium line-through">&#8358; {{number_format($product['price'], 2)}}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
