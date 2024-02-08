@extends('welcome')

@section('contents')
    <div >
        

<section class="bg-center bg-cover bg-[url('https://upload.wikimedia.org/wikipedia/commons/b/bd/Mariveles_Bataan_skyline.jpg')] bg-gray-500 bg-blend-multiply">
    <div class="grid grid-cols-2">
        <div class="flex justify-center">
            <img class="rounded-full overflow-hidden h-fit mt-20  border-8 border-white" id="dr" src="images/logo.png" alt="">
        </div>
        <div class="px-4 mx-auto max-w-screen-xl py-24 lg:py-52">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">What Makes Us Better, <br> Makes you Better.</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolorem qui rerum, quod voluptate quibusdam facere ea hic nemo in natus, officiis fugit voluptatem veniam officia, repellendus quisquam sint enim!</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>  
            </div>
        </div>
    </div>
<div class="pt-5 w-full h-16 mt-14">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-red-300 dark:hover:bg-gray-800 group">
            <i class="h-14 mt-14 fa-solid fa-suitcase-medical" style="color: #d44040;"></i>
                <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Find a Medication</span>
            </button>
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-red-300 dark:hover:bg-gray-800 group">
            <i class="h-14 mt-14 fa-solid fa-house-medical" style="color: #d44040;"></i>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Find a Clinic</span>
        </button>
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-red-300 dark:hover:bg-gray-800 group">
            <i class="h-14 mt-14 fa-solid fa-sheet-plastic" style="color: #d44040;"></i>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Scedule an appoitment</span>
        </button>
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-red-300 dark:hover:bg-gray-800 group">
            <i class="h-14 mt-14 fa-solid fa-stethoscope" style="color: #d44040;"></i>
            <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Learn About Services</span>
        </button>
    </div>
</div>
</section>


    </div>
@endsection