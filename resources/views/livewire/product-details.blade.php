<div class="flex flex-col py-2 px-10 w-full">
    <div class="flex w-full">
        <div class="w-1/2 flex">
            <div class="w-1/5 flex justify-center items-center">
                @if(!is_null($previous))
                    <a href="{{url('/product/'.$previous)}}">
                        <img class="h-10 w-6 transform rotate-90" src="{{asset('assets/icons/Arrow.svg')}}"/>
                    </a>
                @else
                    <img class="default h-10 w-6 transform rotate-90" src="{{asset('assets/icons/Arrow.svg')}}"/>
                @endif
            </div>
            <div class="w-3/5 border-2 border-gray-400 bg-white p-12">
                <div class="w-full h-64">
                    <img class="h-64" src="{{asset('assets/gadget/'.$image)}}" alt="{{$name}}"/>
                </div>
            </div>
            <div class="w-1/5 flex justify-center items-center">
                @if(!is_null($next))
                    <a href="{{url('/product/'.$next)}}">
                        <img class="h-10 w-6 transform -rotate-90" src="{{asset('assets/icons/Arrow.svg')}}"/>
                    </a>
                @else
                    <img class="default h-10 w-6 transform -rotate-90" src="{{asset('assets/icons/Arrow.svg')}}"/>
                @endif
                </div>
        </div>
        <div class="w-1/2 p-12 flex flex-col">
            <div class="w-full">
                <h2 class="font-bold text-2xl">
                {{$name}}
                </h2>
                <p class="text-lg font-medium">
                    {{$description}}
                </p>
                <span class="text-lg">
                    {{$notes}}
                </span>
            </div>
            <div class="w-full text-3xl my-6">
                <span class="semi-bold">NGN {{number_format($price - $discount, 2)}}</span>
                <span class="line-through">NGN {{number_format($price, 2)}}</span>
            </div>
            <!-- Quantity section -->
            <div class="w-full flex">
                <div class="w-2/3 border border-gray-300 bg-white flex">
                    <div class="w-1/4 flex justify-center text-gray-500 items-center text-2xl font-semibold">-</div>
                    <div class="w-1/2 text-gray-500">
                        <input class="pl-10 p-3 w-full" type="text" value="1">
                    </div>
                    <div class="w-1/4 flex justify-center text-gray-500 items-center text-2xl font-semibold">+</div>
                </div>
                <div class="w-1/3 p-4">
                    <a href="{{url('/favourite/'.$product_id)}}">
                        <img class="h-6" src="{{asset('assets/icons/favorite.svg')}}" alt="favourite icon"/>
                    </a>
                </div>
            </div>
            <!-- end quantity section -->
            <!-- Add to bag section -->
            <div class="add_bag_btn bg-transparent py-2 mt-16 px-4 border border-gray-500">
                <button class="modal-open addtobag text-white font-semibold" data-product="{{$product_id}}" data-image="{{$image}}" data-name="{{$name}}" data-description="{{$description}}" data-price="{{number_format($price - $discount, 2)}}" data-note="{{$notes}}">
                    ADD TO BAG
                </button>
            </div>
            <!-- End add to bag -->
        </div>
    </div>
    <!-- Tailored display -->
    <div class="flex flex-col">
        <div class="flex py-12 px-10 w-full justify-center items-center">
            <div class="flex-1">
                <hr class="border-1 border-gray-500" />
            </div>
            <div class="flex-1 px-4 text-2xl font-medium text-center text-gray-500">
                You may also like
            </div>
            <div class="flex-1">
                <hr class="border-1 border-gray-500" />
            </div>
        </div>
        <!-- tailored card -->
        <div class="flex py-12 px-10 w-full -px-2">
            @foreach($related as $product)
            <div class="w-1/5 flex flex-col px-2">
                <a href="{{url('/product/'.$product->slug)}}">
                    <div class="w-full border border-gray-500 bg-white p-8 h-48">
                        <img class="suggested_img" src="{{asset('assets/gadget/'.$product->image)}}" alt="{{$product->slug}}"/>
                    </div>
                    <div class="w-full my-4">
                        <p class="font-normal">{{$product->name}}</p>
                        <span class="font-medium line-through">NGN {{number_format($product->price, 2)}}</span><br />
                        <span class="font-bold">NGN {{number_format($product->price - $product->discount, 2)}}</span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <!-- end tailored card -->
    </div>
    <!-- end tailored display -->
</div>

<!--Modal-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container border border-mainorange bg-white w-9/12 mx-auto shadow-lg z-50 overflow-y-auto">

      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-10">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold"></p>
          <div class="modal-close bg-main-orange flex justify-center rounded-full h-10 w-10 cursor-pointer z-50">
            <svg class="m-auto fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <div class="flex w-full">
            <div class="1/3 mr-12 image_avatar">

            </div>
            <div class="2/3 mr-12 py-12">
                <div class="my-6 product_text"></div>
                <div class="product_price"></div>
                <div class="my-6 flex product_quantity">
                    <!-- Quantity section -->
                    <div class="w-full flex">
                        <div class="w-2/3 border border-gray-300 bg-white flex">
                            <div class="w-1/4 flex justify-center text-gray-500 items-center text-2xl font-semibold">-</div>
                            <div class="w-1/2 text-gray-500">
                                <input class="pl-10 p-3 w-full" type="text" value="1">
                            </div>
                            <div class="w-1/4 flex justify-center text-gray-500 items-center text-2xl font-semibold">+</div>
                        </div>
                        <div class="w-1/3 p-4">
                            <img class="h-6" src="{{asset('assets/icons/favorite.svg')}}" alt="favourite icon"/>
                        </div>
                    </div>
                    <!-- end quantity section -->
                </div>
            </div>
        </div>

        <!--Footer-->
        <div class="flex submit_cart justify-end">

        </div>

      </div>
    </div>
  </div>
  <script>
        var openmodal = document.querySelectorAll('.modal-open')
        var display_image = document.querySelector('.image_avatar')
        var product_title = document.querySelector('.product_text')
        var product_cost = document.querySelector('.product_price')
        var submit_cart = document.querySelector('.submit_cart')
        for (var i = 0; i < openmodal.length; i++) {
          openmodal[i].addEventListener('click', function(event){
          var name = this.getAttribute('data-name')
          var description = this.getAttribute('data-description')
          var image = this.getAttribute('data-image')
          var price = this.getAttribute('data-price')
          var note = this.getAttribute('data-note')
          var product_id = this.getAttribute('data-product')
          display_image.innerHTML = `<img style="width: 460px;" src="{{asset('assets/gadget/${image}')}}" alt="mobile" />`
          product_title.innerHTML = `
                                      <span class="font-bold text-3xl my-6">${name}</span>
                                      <p class="font-thin text-medium">
                                        ${description}<br/>
                                        <span class="mt-4">${note}</span>
                                      </p>
                                      `
          product_cost.innerHTML = `<span class="font-bold text-2xl">NGN ${price}</span>`
          submit_cart.innerHTML = `<!-- Add to bag section -->
                                    <div class="add_bag_btn bg-transparent py-2 px-4 border border-gray-500">
                                        <button onclick="addToCart(${product_id})" class="addtobag submit_cart_order text-white font-semibold">
                                            ADD TO BAG
                                        </button>
                                    </div>
                                    <!-- End add to bag -->`
          event.preventDefault()
          toggleModal()
          })
        }
        const overlay = document.querySelector('.modal-overlay')
        if(overlay != null){
          overlay.addEventListener('click', toggleModal)
        }

        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
          closemodal[i].addEventListener('click', toggleModal)
        }

        document.onkeydown = function(evt) {
          evt = evt || window.event
          var isEscape = false
          if ("key" in evt) {
          isEscape = (evt.key === "Escape" || evt.key === "Esc")
          } else {
          isEscape = (evt.keyCode === 27)
          }
          if (isEscape && document.body.classList.contains('modal-active')) {
          toggleModal()
          }
        };

        function toggleModal () {
          const body = document.querySelector('body')
          const modal = document.querySelector('.modal')
          modal.classList.toggle('opacity-0')
          modal.classList.toggle('pointer-events-none')
          body.classList.toggle('modal-active')
        }

        function addToCart(product) {
          window.location=`/add/${product}`;
        }
    </script>
