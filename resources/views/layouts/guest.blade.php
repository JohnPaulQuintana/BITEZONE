<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- font-awesome --}}
        <link rel="stylesheet" href="{{ asset('font-awesome/all.min.css') }}">
        {{-- flowbite --}}
        <link rel="stylesheet" href="{{ asset('flowbite/flowbite.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-gray-100">
            {{-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> --}}

            <div class="w-full sm:max-w-4xl mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        
         {{-- scripts --}}
         <script src="{{ asset('font-awesome/all.min.js') }}"></script>
        {{-- flowbite --}}
        <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
    </body>
</html>
