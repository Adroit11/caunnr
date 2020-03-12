    <div class="bg-black py-8 px-16 text-orange">
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
    <div class="bg-white">
        <div class="container flex mx-auto px-12 py-6">
            <div class="flex items-center py-2 px-10 w-full">
                <div class="w-4/5 flex items-center">
                    <img src="{{asset('assets/icons/logo.svg')}}" alt="caunnr logo" class="logo">
                    <div class="ml-4 w-full">
                        <label>
                            <input class="pl-10 p-3 w-full border border-gray-300" type="text" placeholder="Search">
                        </label>
                    </div>
                    <div class="ml-4">
                        <select class="p-3 border border-gray-300 text-gray-500"><option>All</option></select>
                    </div>
                    <div class="ml-4">
                        <button class="p-3 w-32 bg-main-orange text-white">
                            Search
                        </button>
                    </div>
                </div>
                <div class="w-1/5 flex justify-end">
                    <div class="ml-6">
                        <img src="{{asset('assets/icons/bag.svg')}}" alt="cart" class="header_icon">
                    </div>
                    <div class="ml-6">
                        <img src="{{asset('assets/icons/favorite.svg')}}" alt="favourite" class="header_icon">
                    </div>
                    <div class="ml-6">
                        <img src="{{asset('assets/icons/user.svg')}}" alt="profile" class="header_icon">
                    </div>
                </div>
            </div>
        </div>
    </div>

