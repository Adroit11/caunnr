<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

        <!-- Livewire Styles -->
        @livewireStyles

        <!-- Tailwind CSS CDN -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-main-body-ash">
        <div class="font-sans bg-grey-lighter flex flex-col min-h-screen w-full">
            @livewire('header')
            <div class="container mx-auto flex px-12 py-6">
                <div class="flex flex-col items-center py-2 px-10 w-full">
                    <div class="bg-main-orange mt-5 h-80 px-12 w-full">
                        <div class="flex">
                            <div class="flex-1 mt-32 py-12">
                                <h2 class="text-5xl font-bold">Log In to Caunnr and<br>Get a Secret Offer</h2>
                                <p><span class="font-bold">Exclusive promo for registered users only</span></p>
                            </div>
                            <div class="flex-1 jADcty">
                                <img src="{{asset('assets/img/banner.png')}}" alt="banner">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-row">
                        <div class="w-1/3 bg-black h-1">

                        </div>
                        <div class="w-2/3 bg-gray-500 h-1">

                        </div>
                    </div>
                    <div class="w-full flex flex-row py-8 text-xl text-gray-600">
                        <div class="w-1/2 text-2xl">
                            We’ve got great gadget for you.
                        </div>
                        <div class="w-1/2 text-right">
                            Sales and Promotions
                        </div>
                    </div>
                    <div class="w-full flex px-12 pt-6 border-t-2 border-gray-600">
                        <div class="circle flex-1 h-cus border rounded-full m-6 cirlce-purple">
                        </div>
                        <div class="circle flex-1 h-cus border rounded-full m-6 cirlce-blue">
                        </div>
                        <div class="circle flex-1 h-cus border rounded-full m-6 cirlce-deep-purple">
                        </div>
                        <div class="circle flex-1 h-cus border rounded-full m-6 circle-deep-blue">
                        </div>
                        <div class="circle flex-1 h-cus border rounded-full m-6 circle-green">
                        </div>
                        <div class="circle flex-1 h-cus border rounded-full m-6 bg-main-orange">
                        </div>
                    </div>
                    <div class="w-full flex px-12 mb-16 text-gray-600 text-center font-semibold">
                        <div class="flex-1 mx-6">
                            Deals
                        </div>
                        <div class="flex-1 mx-6">
                            Guarantee
                        </div>
                        <div class="flex-1 mx-6">
                            Low Cost
                        </div>
                        <div class="flex-1 mx-6">
                            Fast Delivery
                        </div>
                        <div class="flex-1 mx-6">
                            Trends
                        </div>
                        <div class="flex-1 mx-6">
                            New Brands
                        </div>
                    </div>
                    <!-- Products card -->
                    @livewire('product')
                </div>
            </div>
            <!-- Livewire Script -->
            @livewireScripts
        </div>
    </body>
</html>
