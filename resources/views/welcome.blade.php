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
        
        {{-- fonts --}}
        


        @vite('resources/css/app.css')
        
        {{-- xustom css --}}
        <style>
            #logo{
                height: 45px;
            }
            #dr{
                height: 800px;
            }
        </style>
    </head>
    <body>
        {{-- header --}}
        <header class="border-red-300 border-b-2 flex gap-2 justify-between p-2">
            <div class="flex">
                <img src="images/logo.png" alt="" id="logo">
                <h1 class="font-bold text-red-400 text-4xl">BITEZONE</h1>
            </div>
            <div>
                <ul class="flex gap-8 text-2xl font-mono text-red-400 font-bold">
                    <li class="cursor-pointer hover:text-red-600 p-2">Home</li>
                    <li class="cursor-pointer hover:text-red-600 p-2">Services</li>
                    <li class="cursor-pointer hover:text-red-600 p-2">About</li>
                    <li class="cursor-pointer hover:text-red-600 p-2">RHU</li>
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
