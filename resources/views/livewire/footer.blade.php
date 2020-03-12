
    <div class="bg-white">
        <div class="container flex mx-auto px-12 py-6">
            <div class="flex items-center py-2 px-10 w-full">
                <div class="w-2/5">
                    <h5 class="text-xs text-gray-700 font-bold">
                        New to Caunnr?
                    </h5>
                    <span class="text-xs text-gray-700">
                        Subscribe to our newsletter to get updates on our latest offers!
                    </span>
                </div>
                <div class="w-3/5 flex">
                    <img src="{{asset('assets/icons/logo.svg')}}" alt="caunnr logo" class="logo">
                    <div class="ml-4 w-full">
                        <label class="subscribe">
                            <input class="pl-10 p-3 w-full border border-gray-300" type="text" placeholder="Enter E-mail Address">
                        </label>
                    </div>
                    <div class="ml-4">
                        <button class="p-3 w-32 bg-main-orange text-white">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Dark footer section -->
<div class="bg-black w-full text-gray-700">
    <div class="container flex flex-col mx-auto px-12 py-6">
        <div class="flex py-6 px-10 w-full">
            <div class="w-2/5">
                <h4 class="font-bold">Welcome to Caunnr</h4>
                <span class="font-thin text-sm">
                    <p class="my-3">
                        Caunnr Limited is the leading retail company for
                        affordable and durable mobile phones, computers,
                        accessories, and various types of gadgets.
                    </p>
                    <p class="my-3">
                        We consider it necessary to fill up this need in the
                        global information technology sector with emphasis
                    </p>
                </span>
            </div>
            <div class="w-3/5 flex ml-20">
                <div class="flex-1 px-4">
                    <h4 class="font-bold">Contact Us</h4>
                    <span class="font-thin text-sm">
                        <p class="my-3">
                            Call us from 8:00am - 6:00pm
                            <span class="font-bold text-3xl text-orange">08134366997</span>
                        </p>
                        <p class="my-3">
                            7A Otigba Road, Ikeja Lagos<br />
                            info@caunnr.com
                        </p>                    
                    </span>
                </div>
                <div class="flex-1 px-4 flex flex-col">
                    <div class="w-full">
                        <h4 class="font-bold">Quick touch</h4>
                        <ul class="font-thin text-sm">
                            <li>Home</li>
                            <li>About</li>
                            <li>Contact us</li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                    <div class="w-full mt-12 mb-6">
                        <h5 class="font-bold">Stay Connected</h5>
                        <div class="flex py-4">
                            <div class="flex-1 pr-2">
                                <img src="{{asset('assets/icons/instagram.svg')}}" alt="caunnr logo" class="logo">
                            </div>
                            <div class="flex-1 pr-2">
                                <img src="{{asset('assets/icons/twitter.svg')}}" alt="caunnr logo" class="logo">
                            </div>
                            <div class="flex-1 pr-2">
                                <img src="{{asset('assets/icons/whatsapp.svg')}}" alt="caunnr logo" class="logo">
                            </div>
                            <div class="flex-1 pr-2">
                                <img src="{{asset('assets/icons/linkedin.svg')}}" alt="caunnr logo" class="logo">
                            </div>
                            <div class="flex-1">
                                <img src="{{asset('assets/icons/instagram.svg')}}" alt="caunnr logo" class="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-4">
                    <h4 class="font-bold">Products</h4>
                    @foreach($products as $product)
                    <div class="dropdown inline-block relative font-light">
                        {{$product->name}} ({{count($product->model)}}) 🠋
                    </div>
                    <ul class="font-thin text-sm dropdown-content absolute hidden pt-1">
                        @foreach($product->model as $model)
                            <li>{{$model->name}}</li>
                        @endforeach
                    </ul> 
                    @endforeach
                </div>
            </div>
        </div>
        <div class="px-10 w-full">
            <hr />
        </div>
        <div class="flex py-6 px-10 w-full">
            <div class="w-2/3 font-bold text-xxs">
                &copy; 2019 CAUNNR Limited. All Rights Reserved
            </div>
            <div class="w-1/3 flex font-bold text-xs">
                <div class="w-2/3 text-xxs">
                    We guarantee you Safe Payment on your transaction
                </div>
                <div class="w-1/3 flex">
                    <div class="flex-1 mr-2">
                        <img class="ft-w-full" src="{{asset('assets/icons/Visa.svg')}}" alt="caunnr logo">
                    </div>
                    <div class="flex-1">
                        <img class="ft-w-full" src="{{asset('assets/icons/Master.svg')}}" alt="caunnr logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

