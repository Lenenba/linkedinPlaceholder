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
                <div class="h-14 w-full flex max-w-6xl relative mx-auto px-6 bg-gray-100">
                    test
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
