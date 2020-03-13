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
        <div class="font-sans bg-grey-lighter flex flex-col min-h-screen w-full">
            @livewire('header')
            <div class="container mx-auto flex px-12 py-6">
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
        for (var i = 0; i < openmodal.length; i++) {
          openmodal[i].addEventListener('click', function(event){
          var name = this.getAttribute('data-name')
          var description = this.getAttribute('data-description')
          var image = this.getAttribute('data-image')
          var price = this.getAttribute('data-price')
          var note = this.getAttribute('data-note')
          display_image.innerHTML = `<img style="width: 460px;" src="{{asset('assets/gadget/${image}')}}" alt="mobile" />`
          product_title.innerHTML = `
                                      <span class="font-bold text-3xl my-6">${name}</span>
                                      <p class="font-thin text-medium">
                                        ${description}<br/>
                                        <span class="mt-4">${note}</span>
                                      </p>
                                      `
          product_cost.innerHTML = `<span class="font-bold text-2xl">NGN ${price}</span>`
          event.preventDefault()
          toggleModal()
          })
        }
        
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        
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
    </script>
</html>
