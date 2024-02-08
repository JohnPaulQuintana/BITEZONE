@extends('layouts.guest')

@section('contents')
<div class="flex flex-col px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="flex gap-5 justify-between">
        <a href="#" class="flex items-center text-2xl font-semibold text-gray-700 dark:text-white">
            <i class="fa-solid fa-paw fa-2xl h-8 mr-2 text-red-500"></i>
            {{-- <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo"> --}}
            <span class="border-b-2 border-red-500">BITEZONE</span>   
        </a>
        <div class="flex gap-10">
            <a href="#" class="flex items-center text-2xl font-semibold text-gray-700 dark:text-white hover:text-red-500">
                <i class="fa-solid fa-user fa-2xl h-8 mr-2 text-red-500"></i>
                {{-- <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo"> --}}
                <span class="border-b-2 border-red-500">Patient's</span>   
            </a>
            <a href="#" class="flex items-center text-2xl font-semibold text-gray-700 dark:text-white hover:text-blue-700">
                <i class="fa-solid fa-user-doctor fa-2xl h-8 mr-2 text-blue-700"></i>
                {{-- <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo"> --}}
                <span class="border-b-2 border-blue-400">Clinic</span>   
            </a>
        </div>
    </div>
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-4xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-red-500 md:text-2xl dark:text-white border-l-8 pl-2 border-red-500">
                Create account
            </h1>
            <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="grid gap-6 md:grid-cols-3">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                        <input type="text" name="firstname" id="first_name" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
                        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                        <input type="text" name="lastname" id="last_name" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                    </div>
                    <div>
                        <label for="middlename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle name</label>
                        <input type="text" name="middlename" id="middlename" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Flowbite" required>
                        <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
                    </div>  
                    <div>
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                        <input type="number" name="age" id="age" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        <x-input-error :messages="$errors->get('age')" class="mt-2" />
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" name="address" id="address" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="flowbite.com" required>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>
                    <div>
                        <label for="contact_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact No.</label>
                        <input type="tel" name="contact_no" id="contact_no" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        <x-input-error :messages="$errors->get('contact_no')" class="mt-2" />
                    </div>
                    <div>
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <select name="gender" id="gender" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Select a gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Other's</option>
                        </select>
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                    </div>
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">username</label>
                        <input type="text" name="username" id="username" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                        <input type="email" name="email" id="email" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="border-l-8 border-red-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                
                <div class="flex gap-5">
                    {{-- <a href="{{ route('home') }}" class="w-full text-white bg-red-700 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Back to home</a> --}}
                    <input type="submit" name="patient" value="Patient" class="w-full text-white bg-red-700 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <input type="submit" name="clinic" value="Clinic" class="w-full text-white bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                </div>
                <p class="text-sm font-light text-gray-700 dark:text-gray-500">
                    Already have an account? <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-700 border-l-4 pl-1 border-blue-500">Login here</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        console.log('registration')
    </script>
@endsection
