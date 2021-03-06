@if($products->isNotEmpty())
    @foreach($products as $product)
        <div class="w-full flex flex-col md:flex-row md:pl-12 bg-white md:mb-12">
            <div class="hidden md:block md:w-2/5 md:flex">
                <div class="flex-1 py-12">
                    <h3 class="text-lg font-semibold">{{$product->name}}</h3>
                    <div class="mt-6">
                        <ul class="text-xs font-medium">
                            @foreach($product->model as $model)
                                <li>
                                    <a href="#">{{$model->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="flex-1 py-12 text-center {{($count % 2 === 0)? 'bg-black text-white' : 'bg-main-orange'}}">
                    <img class="model_img" src="{{asset('/assets/gadget/'.$product->avatar)}}" alt="phone model picture" />
                    <span class="text-2xl">{{$product->tag_text}}</span>
                    <div class="model_btn bg-transparent py-2 px-4 border {{($count % 2 === 0)? 'border-mainorange' : 'border-black'}}">
                        <button class="shopnow">
                            Shop Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="block w-full p-6 flex flex-col md:hidden">
                <div class="w-full">
                    <h3 class="text-2xl font-semibold">{{$product->name}}</h3>
                </div>
                <div class="w-full">
                    <div class="text-xs font-medium flex">
                        @foreach($product->model as $model)
                            <div class="text-left mr-2">
                                <a href="#">{{$model->name}}</a> |
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full p-6 md:w-3/5">
                <div class="w-full grid grid-cols-2 md:grid-cols-4">
                    @foreach($product->model as $model)
                        @foreach($model->item->take(8) as $item)
                            @livewire('product-items', ['model' => $item])
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        <?php $count++; ?>
    @endforeach
@else
    <div>Products are currently not available, please try again</div>
@endif
