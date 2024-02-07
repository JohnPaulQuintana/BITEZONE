@extends('welcome')

@section('contents')
    <div class="grid grid-cols-2 pt-20 h-auto">
        <div id="list" class="border">
            <!-- <ul class="gap-8 text-xl font-mono font-bold">
                <li class="cursor-pointer hover:text-red-200 p-2"><a href="{{ url('/dashboard') }}">Mariveles District Hospital</a></li>
                <li class="cursor-pointer hover:text-red-200 p-2"><a href="{{ route('location') }}">Mariveles Main Health Center</a></li>
                <li class="cursor-pointer hover:text-red-200 p-2"><a href="{{ route('home') }}">Mariveles Health Service Cooperative Hospital</a></li>
                <li class="cursor-pointer hover:text-red-200 p-2">Bepza Medical Center</li>
                <li class="cursor-pointer hover:text-red-200 p-2">Brgy. Maligaya Health Center</li>
                <li class="cursor-pointer hover:text-red-200 p-2">Poblacion Health Center</li>
            </ul> -->
            

<div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 ml-72 mt-36">
    <div class="flex items-center justify-between mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Location list</h5>
        
   </div>
   <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            <li class="py-3 sm:py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Mariveles District Hospital
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            CFQX+793, Ave of the Philippines, Freeport Area of Bataan, Mariveles, 2106 Bataan
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-blue-500 dark:text-white">
                        View
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center ">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Mariveles Main Health Center
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            CFPR+G27, Mariveles, 2105 Bataan
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-blue-500 dark:text-white">
                        View
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Michael image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white ">
                            Mariveles Health Service Cooperative Hospital
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            8 Burgos, Mariveles, 2106 Bataan
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-blue-500 dark:text-white">
                        View
                    </div>
                </div>
            </li>
            <li class="py-3 sm:py-4">
                <div class="flex items-center ">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-4.jpg" alt="Lana image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Brgy. Maligaya Health Center
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            FF2X+XQ4, Freeport Area of Bataan, Mariveles, Bataan
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-blue-500 dark:text-white">
                        View
                    </div>
                </div>
            </li>
            <li class="pt-3 pb-0 sm:pt-4">
                <div class="flex items-center ">
                    <div class="flex-shrink-0">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Thomas image">
                    </div>
                    <div class="flex-1 min-w-0 ms-4">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Poblacion Health Center
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            CFMP+GM5, Mariveles, 2105 Bataan
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-blue-500 dark:text-white">
                        View
                    </div>
                </div>
            </li>
        </ul>
   </div>
</div>

        <div>
        
    </div>
        </div>
        <div id="map" class="border p-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.8184012056404!2d120.49263457169238!3d14.437626761837468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339618ceba3684b5%3A0xff96824b50d2abf9!2sMariveles%20District%20Hospital!5e0!3m2!1sen!2sph!4v1707306900886!5m2!1sen!2sph" 
                width="900" 
                height="700" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>
    
@endsection

@section('scripts')
    <script>
        console.log('hjdwahdjkwa')
    </script>
@endsection