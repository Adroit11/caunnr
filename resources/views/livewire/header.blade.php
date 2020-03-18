    <div class="bg-black py-8 px-16 text-orange hidden md:block">
        <div class="flex">
            <div class="w-5/6">
                <span class="font-semibold text-lg">
                    Welcome to CAUUNR, all you need here is your card.
                </span>
            </div>
            <div class="w-1/6 text-right">
                <span class="bg-main-orange text-black rounded-full h-8 w-8 text-lg float-right text-center">
                    x
                </span>
            </div>
        </div>
    </div>
    <div class="hidden bg-white md:block">
        <div class="container flex mx-auto px-12 py-6">
            <div class="flex items-center py-2 px-10 w-full">
                <div class="w-4/5 flex items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{asset('assets/icons/logo.svg')}}" alt="caunnr logo" class="logo">
                    </a>
                    <div class="ml-4 w-full">
                        <label>
                            @livewire('search-bar')
                        </label>
                    </div>
                    <!-- <div class="ml-4">
                        <select class="p-3 border border-gray-300 text-gray-500"><option>All</option></select>
                    </div>
                    <div class="ml-4">
                        <button class="p-3 w-32 bg-main-orange text-white">
                            Search
                        </button>
                    </div> -->
                </div>
                <div class="w-1/5 flex justify-end">
                    <div class="ml-6 flex">
                    <a href="{{url('/cart')}}">
                        <div class="flex flex-col">
                            <img src="{{asset('assets/icons/bag.svg')}}" alt="cart" class="header_icon">
                            <span class="cart_count bg-main-orange text-xs text-white z-10 rounded-full h-6 w-6 flex items-center justify-center">{{$total_cart}}</span>
                        </div>
                    </a>
                    </div>
                    <div class="ml-6">
                        <a href="{{url('/favorite')}}">
                            <div class="flex flex-col mt-1">
                                <img src="{{asset('assets/icons/favorite.svg')}}" alt="favourite" class="header_icon">
                                <span class="cart_count bg-main-orange text-xs text-white z-10 rounded-full h-6 w-6 flex items-center justify-center">{{$total_favorite}}</span>
                            </div>
                        </a>
                    </div>
                    @if(Auth::check())
                        <div class="ml-6">
                            <img src="{{asset('assets/icons/user.svg')}}" alt="profile" class="header_icon">
                        </div>
                    @else
                        <div class="ml-2 text-orange text-lg font-medium">
                            <a href="{{route('login')}}">Login</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="md:hidden bg-white flex flex-col p-2 px-6 py-6">
        <div class="w-full flex mb-2">
            <div class="text-3xl flex-1 font-bold">
                <h1>Caunnr</h1>
            </div>
            <div class="flex-1 flex justify-end items-center">
                <div class="ml-6 flex">
                    <a href="{{url('/cart')}}">
                        <div class="flex flex-col">
                            <img src="{{asset('assets/icons/bag.svg')}}" alt="cart" class="header_icon">
                        </div>
                    </a>
                </div>
                <div class="ml-6">
                    <a href="{{url('/favorite')}}">
                        <div class="flex flex-col mt-1">
                            <img src="{{asset('assets/icons/favorite.svg')}}" alt="favourite" class="header_icon">
                        </div>
                    </a>
                </div>
                <div class="ml-6">
                    <a href="">
                        <div class="flex flex-col mt-1">
                            <img src="{{asset('assets/icons/user.svg')}}" alt="profile" class="header_icon">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full mt-2 flex">
            <label class="w-full">
                @livewire('search-bar')
            </label>
        </div>
    </div>

