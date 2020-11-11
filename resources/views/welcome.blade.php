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

                            <div class="bg-white rounded-lg border border-gray-400 mb-4">
                                <div class="flex align-top justify-between mx-2 my-2">
                                    <div class="flex">
                                        <img src="{{ asset('images/ubisoft.jpeg') }}" alt="julesBilitik avatar" class="mr-2 h-12">    
                                        <div class="flex-col">
                                            <h1 class="text-sm text-gray-800 font-bold -mb-1">Ubisoft Montréal</h1>
                                            <h1 class="text-xs text-gray-600 -mb-1">66 636 Abonnés</h1>
                                            <div class="flex items-center">
                                                <h1 class="text-xs text-gray-600">14 min</h1>
                                                <h1 class="text-sm text-gray-600">.</h1>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 text-gray-600">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="ml-1 h-4">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </div>
                                <div class="mb-4">
                                    <p class="text-xs mx-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea pariatur debitis adipisci 
                                        dolor provident, consequuntur dicta quaerat enim eius dolorem nobis quasi animi 
                                        iste delectus commodi, placeat nisi aperiam vel? consequuntur <span class="text-xs text-gray-600">... voir plus</span>  </p>
                                </div>
                                <img src="{{ asset('images/0.jpg') }}" alt="julesBilitik avatar" class="mr-2 mb-2 h-full"> 
                                <div class="flex items-center ml-4 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-xs h-4 rounded-full text-white bg-blue-600">
                                        <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-xs h-4 rounded-full text-white bg-green-600 mx-2">
                                        <path fill-rule="evenodd" d="M9 3a1 1 0 012 0v5.5a.5.5 0 001 0V4a1 1 0 112 0v4.5a.5.5 0 001 0V6a1 1 0 112 0v5a7 7 0 11-14 0V9a1 1 0 012 0v2.5a.5.5 0 001 0V4a1 1 0 012 0v4.5a.5.5 0 001 0V3z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-xs h-4 rounded-full text-white bg-red-600">
                                         <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <h1 class="text-xs text-gray-600 mx-2"> 200 . 7 commentaires</h1>
                                </div>   
                            </div>
                            
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
