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

        {{-- flowbite --}}
        <link rel="stylesheet" href="{{ asset('flowbite/flowbite.min.css') }}">

        @vite('resources/css/app.css')
        
        {{-- xustom css --}}
        <style>
            body{
                padding: 0;
                margin: 0;
                box-sizing: border-box
            }
            #logo{
                height: 45px;
            }
            
        </style>
    </head>
    <body>
        {{-- header --}}
        <header class="bg-red-500 border-red-300 text-white border-b-2 flex gap-2 justify-between p-2 fixed w-full z-50">
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
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-location-dot"></i> <a href="{{ route('location') }}"> Location</a></li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-house"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-hospital-user"></i> <a href="{{ route('services') }}">Services</a></li>
                            <li class="cursor-pointer hover:text-red-200 p-2"><i class="fa-solid fa-hospital"></i> <a href="{{ route('about') }}">About</a></li>
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
           
            {{-- main --}}
            <div>    
                    @yield('contents')     
            </div>



            {{-- footer --}}
            <div class="footer">

            </div>
            
        </div>

        {{-- scripts --}}
        <script src="{{ asset('font-awesome/all.min.js') }}"></script>

        {{-- box-icons --}}
        <script src="{{ asset('box-icons/boxicons.js') }}"></script>

        {{-- flowbite --}}
        <script src="{{ asset('flowbite/flowbite.min.js') }}"></script>
        @yield('scripts')
    </body>
</html>
