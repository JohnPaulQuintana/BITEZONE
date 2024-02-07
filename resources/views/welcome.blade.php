<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BITEZONE</title>
        {{-- image --}}
        <link rel="stylesheet" href="{{ asset('images/logo.png') }}">


        {{-- font-awesome --}}
        <link rel="stylesheet" href="{{ asset('font-awesome/all.min.css') }}">
        
        {{-- box-icons --}}
        <link rel="stylesheet" href="{{ asset('box-icons/boxicons.min.css') }}">


        @vite('resources/css/app.css')
        
        {{-- xustom css --}}
        <style>
            #logo{
                height: 45px;
            }
            
        </style>
    </head>
    <body>
        {{-- header --}}
        <header class="bg-red-500 border-red-300 text-white border-b-2 flex gap-2 justify-between p-2 fixed w-full">
            <div class="flex gap-2">
                <i class="fa-solid fa-paw fa-2xl"></i>
                <h1 class="font-bold text-4xl"> BITEZONE</h1>
            </div>
            <div>
                @if (Route::has('login'))
                    <ul class="flex gap-8 text-xl font-mono font-bold">
                        @auth
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-right-to-bracket"></i> <a href="{{ url('/dashboard') }}">Back To Dashboard</a></li>
                            @else
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-location-dot"></i> Location</li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-house"></i> Home</li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-hospital-user"></i> Services</li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-hospital"></i> About</li>
                            <li class="cursor-pointer bg-white text-red-400 rounded-md hover:text-red-700 p-2 border">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            </li>
                        @endauth
                    </ul>
                @endif
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

        {{-- box-icons --}}
        <script src="{{ asset('box-icons/boxicons.js') }}"></script>
    </body>
</html>
