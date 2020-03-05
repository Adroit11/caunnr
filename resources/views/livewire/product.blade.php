@foreach($products as $product)
    <div class="w-full flex px-12 bg-white mb-12">
        <div class="w-2/5 flex">
            <div class="flex-1">
                Categories
            </div>
            <div class="flex-1">
                Image
            </div>
        </div>
        <div class="w-3/5">
            product-items
        </div>
    </div>
@endforeach
