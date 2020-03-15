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
</html>
