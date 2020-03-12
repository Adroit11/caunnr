@extends('layouts.app')

@section('content')
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
        <!-- End Products card -->
        <!-- favorite card section -->
        <div class="w-full flex my-12">
            <div class="w-1/3 py-6">
                <h1 class="text-4xl font-semibold">
                    Your Favourites<br />
                    In One Place
                </h1>
                <span class="font-medium">From brand new tech to retro</span>
            </div>
            <div class="w-2/3 bg-main-orange text-right">
                <div class="buynow_btn float-right mr-16 mt-16 bg-transparent py-2 px-4 border border-black">
                    <button class="buynow font-semibold">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <!-- end favorite -->
    </div>
@stop
