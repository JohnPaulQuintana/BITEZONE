
<div class="grid grid-cols-2 h-auto p-3 bg">
    <div class="flex justify-center bg-red-300">
        <img class="rounded-md overflow-hidden h-fit p-24 bg-transparent" id="dr" src="images/Doctors.gif" alt="">
    </div>
    <div>
        <div class="text-center text-6xl font-bold font-Rubik text-red-400 mt-32 p-10">
            Together, It's PAWSIBLE <br> to End the Spread of RABIES
        </div>
        <div class="text-3xl text-center font-semibold mt-5 text-gray-500">
            Rabies is responsible for arround 60,000 deaths <br> worldwide each year. We can stop this.
        </div>

        <div class="flex gap-4 justify-center mt-5">
            
            @auth
                {{-- authenticated --}}
                <div class="bg-red-500 p-2 rounded-md text-white text-lg">
                    <p>You're already authenticated user, back to dashboard</p>
                </div>
                @else
                {{-- NOT AUTHENTICATED --}}
                <span class="border rounded-md bg-red-600 p-2 text-white inline-flex gap-2 cursor-pointer hover:text-red-100">
                    <i class="fa-solid fa-user-tie fa-lg"></i>
                    <span class="font-medium">Login as Guest</span>
                </span>
            
                <span class="border rounded-md bg-red-600 p-2 text-white inline-flex gap-2 cursor-pointer hover:text-red-100">
                    <i class="fa-solid fa-right-to-bracket fa-lg"></i>
                    <span class="font-medium">
                        <a href="{{ route('login') }}">Login Account</a>
                    </span>
                </span>
            @endauth
        

            
        </div>
    </div>
    
    
</div>