<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BITEZONE</title>

        {{-- font-awesome --}}
        <link rel="stylesheet" href="{{ asset('font-awesome/all.min.css') }}">

        @vite('resources/css/app.css')
        
        {{-- xustom css --}}
        <style>
            .bg-img{
                background: url("{{ asset('images/test.jpg') }}");
                background-repeat:no-repeat;
                background-size: contain;
                background-position: right;
            }
        </style>
    </head>
    <body>
        {{-- header --}}
        <header class="border-black border-b-2 flex gap-2 justify-between p-2">
            <div class="logo border">Logo</div>
            <div class="nav border">
                <ul class="flex gap-2">
                    <li class="cursor-pointer hover:text-green-600">navigation</li>
                    <li>navigation jdkawjdkwa</li>
                    <li>navigation</li>
                    <li>navigation</li>
                </ul>
            </div>
            
        </header>
        <div class="">
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            {{-- main --}}
            <div>
                @include('includes.main')
            </div>



            {{-- footer --}}
            <div class="footer">

            </div>
            
        </div>

        {{-- scripts --}}
        <script src="{{ asset('font-awesome/all.min.js') }}"></script>
    </body>
</html>
