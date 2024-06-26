<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=cambay:700" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[url('/public/sources/AbstractBackground.webp')] backdrop-blur-md bg-contain bg-no-repeat bg-cover">
        <div class="font-cambay min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            {{--logo--}}
            <div>
                <div class="shrink-0 items-center mt-8 h-[50px] ">
                    <div class="bg-[url('/public/sources/kargonft_2x.webp')] h-[61px] w-[136px] bg-contain bg-no-repeat"></div>
                </div>
            </div>

            <div class="w-full backdrop-blur rounded-xl sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
