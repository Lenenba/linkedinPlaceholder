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
            <main class="bg-gray-100 max-h-6xl h-64 mb-40">
                <div class="h-14 w-full flex-col max-w-6xl relative mx-auto px-6 bg-gray-100">
                    <div class="flex items-center text-sm py-4 ml-40">  10oz YETI Mug Giveaway Join the hybrid cloud video security webinar & get a YETI mug for free.  
                            <span class="text-gray-600"> &nbsp Pub</span> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class=" ml-1 mt-1 h-4">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                    </div>
                    <div class="flex">
                        <div class="w-2/12">
                            <div class="bg-white rounded-lg mb-2 shadow-sm">
                                <div class="mb-10 border-b-1 border-gray-400 ">
                                    <img src="{{ asset('images/bg.png') }}" alt="" class="rounded-t-lg">
                                    <img src="//www.gravatar.com/avatar/5b126021e3af22f8c4a0fb6a2388e86b?s=100&amp;d=https%3A%2F%2Fs3.amazonaws.com%2Flaracasts%2Fimages%2Fforum%2Favatars%2Favatar-3.png" 
                                        alt="julesBilitik avatar" class="rounded-full border-2 box-border border-white border-solid mr-2 absolute top-0 transform mt-16 ml-16"  width="60">    
                                </div>
                                <div class="flex-col items-center border-b border-gray-400">
                                    <h1 class="text-sm font-bold mx-12 mb-4"> jules Bilitik  </h1>
                                    <p class="text-xs text-gray-700 text-center inline-block align-baseline mb-6"> Administrateur ERP Oracle Cloud chez Agence universitaire de la Francophonie (AUF)  </p>
                                </div>
                                <div class="flex justify-between px-2 py-3">
                                    <h1 class="text-xs text-gray-700">Vues de votre Profil </h1>
                                    <p class="text-xs  text-blue-600 text-center inline-block align-baseline">23</p>
                                </div>
                                <div class="flex justify-between px-2 -py-3">
                                    <h1 class="text-xs text-gray-700">Vues de votre post </h1>
                                    <p class="text-xs  text-blue-600 text-center inline-block align-baseline">78</p>
                                </div>
                                <div class="flex px-2 py-3 my-6 border-t border-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mr-2 h-4">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                    </svg>
                                    <h1 class="text-xs">Éléments enregistrés</h1>
                                    
                                </div>
                            </div>
                            <div class="bg-white rounded-lg shadow-xs">
                                
                                <div class="flex-col items-center border-b border-gray-400">
                                    <h1 class="text-sm font-bold mx-12 mb-4"> jules Bilitik  </h1>
                                    <p class="text-xs text-gray-700 text-center inline-block align-baseline mb-6"> Administrateur ERP Oracle Cloud chez Agence universitaire de la Francophonie (AUF)  </p>
                                </div>
                                <div class="flex justify-between px-2 py-3">
                                    <h1 class="text-xs">Vues de votre Profil </h1>
                                    <p class="text-xs  text-blue-600 text-center inline-block align-baseline">23</p>
                                </div>
                                <div class="flex justify-between px-2 -py-3">
                                    <h1 class="text-xs">Vues de votre Poste </h1>
                                    <p class="text-xs  text-blue-600 text-center inline-block align-baseline">78</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-6/12 mx-8">
                            <div class="bg-white rounded-lg mb-48 shadow-sm ">
                                <div class="p-4">
                                <div class="bg-white flex items-center rounded-full border border-gray-400 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-8 ml-4 text-gray-700">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Commencer un post">
                                    
                                    <div class="p-4">
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="text-sm text-gray-700">
                                        Photo
                                    </div>
                                    <div class="text-sm text-gray-700">
                                        Video
                                    </div>
                                    <div class="text-sm text-gray-700">
                                        Évenement
                                    </div>
                                    <div class="text-sm text-gray-700">
                                        Rediger un article
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="w-3/12 bg-white">
                            troiss
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
