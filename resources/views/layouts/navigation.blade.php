<header class="bg-red-500 border-red-300 text-white border-b-2 flex gap-2 justify-between p-2 fixed w-full z-10">

    <div class="flex gap-2">
        <i class="fa-solid fa-paw fa-2xl"></i>
        <h1 class="font-bold text-4xl"> BITEZONE</h1>
        <!-- drawer init and show -->
        <div class="text-center">
            {{-- <i class="fa-solid fa-arrow-right-from-bracket fa-2xl mt-1" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"></i> --}}
            {{-- <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            Show navigation
            </button> --}}
        </div>
    </div>

    <div>

        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
            class="flex items-center text-sm pe-1 font-medium z-30 text-white rounded-full hover:text-red-200 dark:hover:text-blue-500 md:me-0  dark:text-white"
            type="button">
            <span class="sr-only">Open user menu</span>
            {{-- <i class="fa-solid fa-user w-8 h-8 me-2 border overflow-hidden rounded-full"></i> --}}
            <img class="w-8 h-8 me-2 rounded-full"
                src="https://static.vecteezy.com/system/resources/thumbnails/019/900/322/small/happy-young-cute-illustration-face-profile-png.png"
                alt="user photo">
            {{ Auth::user()->name }}
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownAvatarName"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div class="font-medium ">Pro User</div>
                <div class="truncate">{{ Auth::user()->email }}</div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('profile.edit') }}"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                </li>
                
                
            </ul>
            <div class="py-2">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="w-full block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</button>
                </form>

            </div>
        </div>

    </div>
</header>
