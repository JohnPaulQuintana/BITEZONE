<!-- Main modal -->
<div id="login-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <div class="flex gap-5 justify-between">
                    <a href="#" class="flex items-center text-2xl font-semibold text-gray-700 dark:text-white">
                        <i class="fa-solid fa-paw fa-2xl h-8 mr-2 text-red-500"></i>
                        <span class="border-b-2 border-red-500 text-red-500">BITEZONE</span>
                    </a>
                </div>
                <button id="login-close" type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="register-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5 space-y-4" method="POST" id="login-form">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-2">
                    {{-- Username --}}
                    <div class="col-span-3 sm:col-span-1">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                            <p id="username-login-error" class="mt-2 text-red-500" ></p>
                    </div>
                    
                    {{-- password --}}
                    <div class="col-span-2 sm:col-span-1">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required="">
                            <p id="password-login-error" class="mt-2 text-red-500"></p>
                    </div>
                    
                   
                </div>
                <div class="flex gap-5">
                    
                    <input type="submit" name="type" value="login" class="w-full text-white bg-blue-700 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                </div>
                <p class="text-sm font-light dark:text-gray-500 border-l-4 pl-1 border-blue-500">
                    You don't have an account? <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-700 ">register here</a>
                </p>
            </form>
            
        </div>
    </div>
</div>
