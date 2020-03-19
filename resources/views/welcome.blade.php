@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center md:py-2 md:px-10 w-full">
        <div class="bg-main-orange md:mt-5 h-80 md:px-12 p-6 w-full">
            <div class="flex">
                <div class="md:flex-1 md:mt-32 md:py-12">
                    <h2 class="md:text-5xl text-lg font-bold">Log In to Caunnr and<br>Get a Secret Offer</h2>
                    <p><span class="font-bold md:text-normal text-xs">Exclusive promo for registered users only</span></p>
                </div>
                <div class="md:flex-1 hidden md:block jADcty">
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
        <div class="block md:hidden p-6 w-full flex flex-col bg-white">
            <div class="w-full flex mb-6">
                <div class="sm-circle flex-1 mx-2 sm-h-cus border rounded-full circle-deep-blue"></div>
                <div class="sm-circle flex-1 mx-2 sm-h-cus border rounded-full circle-green"></div>
                <div class="sm-circle flex-1 mx-2 sm-h-cus border rounded-full bg-main-orange"></div>
            </div>
            <div class="w-full flex">
                <div class="sm-circle flex-1 mx-2 sm-h-cus border rounded-full circle-deep-blue"></div>
                <div class="sm-circle flex-1 mx-2 sm-h-cus border rounded-full circle-green"></div>
                <div class="sm-circle flex-1 mx-2 sm-h-cus border rounded-full bg-main-orange"></div>
            </div>
        </div>
        <div class="hidden md:block md:w-full md:flex md:flex-row md:py-8 text-xl text-gray-600">
            <div class="w-1/2 text-2xl">
                We’ve got great gadget for you.
            </div>
            <div class="w-1/2 text-right">
                Sales and Promotions
            </div>
        </div>
        <div class="hidden md:block md:w-full md:flex md:px-12 md:pt-6 md:border-t-2 border-gray-600">
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
    <!-- Alert -->
        @if(Session::has('success'))
            <div class="fixed flex bottom-0 right-0 items-center bg-white text-orange rounded text-sm font-bold px-4 py-3" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p>{{Session::get('success')}}</p>
            </div>
        @elseif(Session::has('error'))
            <div class="fixed flex bottom-0 right-0 items-center bg-white text-orange rounded text-sm font-bold px-4 py-3" role="alert">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg>
                <p>{{Session::get('error')}}</p>
            </div>
        @endif
    <!-- end alert -->
    <div class="hidden md:block md:w-full md:flex md:px-12 md:mb-16 md:text-gray-600 text-center font-semibold">
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
        <div class="hidden md:w-full md:flex md:my-12">
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
