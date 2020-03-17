@extends('layouts.app')

@section('content')
    <div class="w-full flex justify-center">
        <div class="w-650 px-20 my-auto flex flex-col">
            <div class="w-full flex justify-between px-4 pt-10 text-3xl font-bold">
                <div class="py-10"><a href="{{url('/login')}}">Login</a></div>
                <div class="py-10"><a href="#">Register</a></div>
            </div>
            <div class="w-full border-2 border-gray-400 py-10 px-6 bg-white">
                <h3 class="text-3xl py-2">
                    Login to your account
                </h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="w-full py-2">
                        <input class="h-16 p-6 border @error('name') border-red @enderror w-full bg-transparent" type="text" name="name" placeholder="Fullname">
                    </div>
                    <div class="w-full py-2">
                        <input class="h-16 p-6 border @error('email') border-red @enderror w-full bg-transparent" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    <div class="w-full py-2">
                        <input class="h-16 p-6 border @error('password') border-red @enderror w-full bg-transparent" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>
                    <div class="w-full py-2">
                        <input class="h-16 p-6 border w-full bg-transparent" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>
                    <div class="w-full mt-2 py-2 text-2xl text-gray-400">
                        Your personal data will be used to support<br />
                        your experience throughout this website and
                        to manage access to your account
                    </div>
                    <div class="w-full pb-2">
                        <div class="login_btn mt-16 bg-transparent py-2 pl-4 pr-2 border border-black">
                            <button type="submit" class="login font-semibold text-white">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
