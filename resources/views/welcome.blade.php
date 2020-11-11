<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div id="app">
            @include('partials._header')
            <main class="bg-gray-100">
                <div class="w-full flex-col max-w-6xl relative mx-auto px-4 bg-gray-100">
                    <div class="flex items-center text-sm py-4 ml-40">  10oz YETI Mug Giveaway Join the hybrid cloud video security webinar & get a YETI mug for free.  
                            <span class="text-gray-600"> &nbsp Pub</span> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class=" ml-1 mt-1 h-4">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                    </div>
                    <div class="flex">
                        <div class="w-2/12">
                            @include('partials._leftSide')
                        </div>
                        <div class="w-6/12 mx-4">
                            @include('partials._recherche')

                            <div class="flex items-center">
                                <hr class="text-gray-600 mx-4 w-4/6">
                                <h1 class="text-xs text-gray-600 my-2">Classer par:</h1>
                                <h1 class="text-xs text-gray-900 font-bold my-2 mx-1">Haut</h1>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                           @include('partials._box')
                           @include('partials._box')
                            
                        </div>
                        <div class="w-3/12">
                           @include('partials._rightSide')
                        </div>
                    </div>
                    @yield('content')
                </div>
            </main>
            <footer>
            <main class="bg-gray-100">
                    @yield('footer')
                </main>
            </footer>
        </div>
    </body>
</html>
