<a href="{{url('/product/'.$alt)}}">
    <div class="border border-gray-200 card-items">
        <div class="p-3">
            <img class="card-item-img" src="{{asset('assets/gadget/'.$image)}}" alt="{{$alt}}"/>
            <span class="text-sm font-semibold">{{$name}}</span><br>
            <span class="text-xs">{{$description}} - {{$color}}</span><br>
            <div class="text-xs">
                <span class="font-semibold">&#x20a6; {{number_format($selling_price, 2)}}</span> -
                <span class="line-through">&#x20a6; {{number_format($price, 2)}}</span>
            </div>
        </div>
    </div>
</a>
