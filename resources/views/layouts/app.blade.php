<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BITEZONE') }}</title>

         {{-- image --}}
         <link rel="stylesheet" href="{{ asset('images/logo.png') }}">


         {{-- font-awesome --}}
         <link rel="stylesheet" href="{{ asset('font-awesome/all.min.css') }}">
         
         {{-- box-icons --}}
         <link rel="stylesheet" href="{{ asset('box-icons/boxicons.min.css') }}">

         {{-- flowbite --}}
         <link rel="stylesheet" href="{{ asset('flowbite/flowbite.min.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            @include('layouts.sidebar')

            <!-- Page Content -->
            <main>
                @yield('contents')
            </main>
        </div>

        {{-- scripts --}}
        <script src="{{ asset('font-awesome/all.min.js') }}"></script>

        {{-- box-icons --}}
        <script src="{{ asset('box-icons/boxicons.js') }}"></script>

        {{-- flowbite --}}
        <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
    </body>
</html>
