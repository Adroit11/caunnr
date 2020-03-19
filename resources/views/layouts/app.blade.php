<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caunnr</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Livewire Styles -->
        @livewireStyles

    </head>
    <body class="bg-main-body-ash">
        <div class="font-sans bg-grey-lighter flex flex-col min-h-screen w-full md:w-full">
            @livewire('header')
            <div class="md:container md:mx-auto flex md:px-12 md:py-6">
                @yield('content')
            </div>
            @livewire('footer')
            <!-- Livewire Script -->
            @livewireScripts
        </div>
    </body>
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
</html>
