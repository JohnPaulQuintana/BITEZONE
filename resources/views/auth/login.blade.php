@extends('layouts.guest')

@section('contents')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <i class="fa-solid fa-paw fa-2xl h-8 mr-2 text-red-500"></i>
            {{-- <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo"> --}}
            <span class="border-b-2 border-red-500 text-white">BITEZONE</span>
        </a>
        <div
            class="w-full bg-transparent rounded-lg shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-700 border-4">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-red-500 md:text-2xl dark:text-white">
                    Login account
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="grid gap-6 md:grid-cols-1">

                        <div>
                            <label for="username"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Username</label>
                            <input type="text" name="username" id="contact_no"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                            <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>

                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-white dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                    </div>

                    <div class="flex justify-between gap-2 rounded-lg text-center">
                        <a href="{{ route('home') }}"
                            class="w-full text-white bg-red-700 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Back
                            to home</a>
                        <button type="submit"
                            class="w-full text-white bg-red-700 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Login</button>
                    </div>
                    <p class="text-sm font-light text-white dark:text-gray-500">
                        You don't have an account? <a href="{{ route('register') }}"
                            class="font-medium hover:underline dark:text-red-700 text-blue-600">Register here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection

