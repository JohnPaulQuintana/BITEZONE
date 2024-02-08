@extends('welcome')

@section('contents')
    <div class="grid pt-20 h-auto p-4 sm:ml-64">
        <div id="list">
            

            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center fixed z-10 p-2 mt-16 ms-3 text-sm bg-red-500 text-white rounded-lg sm:hidden hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                {{-- <span class="sr-only">Open sidebar</span> --}}
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            
            <aside id="logo-sidebar" class="fixed border-r-4 border-red-500 top-14 left-0 z-40 w-80 h-5/6 transition-transform -translate-x-full sm:translate-x-0 mt-6 " aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-1">
                        <a href="#">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">Mariveles District Hospital</h5>
                        </a>
                        <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Ave of the Philippines, Freeport Area of Bataan, Mariveles, 2106 Bataan</p>
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-1">
                        <a href="#">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">Mariveles Main Health Center</h5>
                        </a>
                        <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Mariveles, 2105 Bataan</p>
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-1">
                        <a href="#">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">Mariveles Health Service Cooperative Hospital</h5>
                        </a>
                        <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">8 Burgos, Mariveles, 2106 Bataan</p>
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-1">
                        <a href="#">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">BARANGAY HEALTH CENTER</h5>
                        </a>
                        <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Zalavarria St., Mariveles, Bataan</p>
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-1">
                        <a href="#">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">Balon Anito Health Center</h5>
                        </a>
                        <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">National Rd, Mariveles, Bataan</p>
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-1">
                        <a href="#">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 dark:text-white">Mariveles Municipal Paramedics Service</h5>
                        </a>
                        <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">Motor Pool Building, Mariveles Municipal Hall Compound, Zalavarria St., Bayan ng Mariveles, 2105 Bataan</p>
                        <a href="#" class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-red-400 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </aside>

            <div class="h-fit ml-20 mb-4 rounded bg-gray-50 dark:bg-gray-800 overflow-hidden">
            <div class="p-2">
                <h1>Most animal bite site map</h1>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.8184012056404!2d120.49263457169238!3d14.437626761837468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339618ceba3684b5%3A0xff96824b50d2abf9!2sMariveles%20District%20Hospital!5e0!3m2!1sen!2sph!4v1707306900886!5m2!1sen!2sph" 
                width="1200" 
                height="580" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            
        </div>
        </div>     
    </div> 
    
@endsection

@section('scripts')
    <script>
        console.log('hjdwahdjkwa')
    </script>
@endsection