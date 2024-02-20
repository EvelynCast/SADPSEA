<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-red-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-1 sm:pt-0 bg-gray-100">
            <div class="w-381 h-301  mt-5 px-5 py-1 bg-white shadow-md-color-red sm:rounded-lg"  style=" border-radius: 25px;box-shadow: 0px 0px 10px 3px rgb(194, 25, 25);">
                <a href="/">
                    <div style="height: 10px;"></div>
                    <img style= "width: 400px; height: 120px;" src= "{{asset('/images/LogoDG.png')}}" />
                </a><br>
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
