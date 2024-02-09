<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BITEZONE') }}</title>

         {{-- image --}}
         <link rel="stylesheet" href="{{ asset('images/logo.png') }}">

         @yield('links')

         <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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

        <script src="{{ asset('jquery/jquery.min.js') }}"></script>

        {{-- scripts --}}
        <script src="{{ asset('font-awesome/all.min.js') }}"></script>

        {{-- box-icons --}}
        <script src="{{ asset('box-icons/boxicons.js') }}"></script>

        {{-- flowbite --}}
        <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

        {{-- datatables --}}
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        @yield('scripts')
    </body>
</html>
