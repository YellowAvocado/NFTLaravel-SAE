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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#273749]">
{{--
                @include('layouts.navigation')
--}}

                <!-- Page Heading -->
                {{--@if (isset($header))
                    <header class="dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif--}}

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
{{--<footer class="">
    --}}{{--generate NFT link--}}{{--
    <div class="mt-48 pb-8 text-center font-cambay">
        <a class="border-4 rounded-2xl bg-transparent text-lg bg-black/20 focus:bg-black/50 hover:text-coal text-yellowy mx-auto px-[30px] py-[15px] mb-[20px] transition ease-in-out duration-300 mr-5 after:content-['_↗']" href="/generate">generate</a>
    </div>
</footer>--}}

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    </body>
</html>
