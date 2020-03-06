@if($products->isNotEmpty())
    @foreach($products as $product)
        <div class="w-full flex px-12 bg-white mb-12">
            <div class="w-2/5 flex">
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
                <div class="flex-1 py-12">
                    Image
                </div>
            </div>
            <div class="w-3/5 py-12">
                product-items
            </div>
        </div>
    @endforeach
@else
    <div>Products are currently not available, please try again</div>
@endif
