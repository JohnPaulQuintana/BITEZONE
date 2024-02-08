@extends('welcome')

@section('contents')
    <div class="bg-center bg-cover bg-[url('https://www.speeli.com/wp-content/uploads/2023/03/JAN23-Why-are-Hospitals-White.jpg')] bg-gray-600 bg-blend-multiply pb-28">
        <div class="pt-20 text-center text-7xl font-Paytone text-white drop-shadow-2xl">
            <h1>SERVICES</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-10 ml-10">
            <a href="#" class="flex flex-col items-center drop-shadow-2xl border-2 border-red-300 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover border-2 border-red-200 ml-1 p-1 w-full rounded h-96 md:h-48 md:w-48 " src="images/checkup.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-400 dark:text-white">Free Checkup</h5>
                    <p class="mb-3 font-normal text-white indent-8 dark:text-gray-400 font-Lexend">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique aut cupiditate. Ipsa tempora ullam repudiandae dignissimos cum sint, nihil blanditiis ipsum officia repellendus! Nesciunt atque distinctio accusantium autem eum!</p>
                    <button type="button" class="text-red-700 bg-red-300 border-2 border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Learn more <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
                
            </a>
            <a href="#" class="flex flex-col items-center drop-shadow-2xl border-2 border-red-300 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover border-2 border-red-200 ml-1 p-1 w-full rounded h-96 md:h-48 md:w-48 " src="images/ambulance.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-400 dark:text-white">24/7 Ambulance</h5>
                    <p class="mb-3 font-normal text-white indent-8 dark:text-gray-400 font-Lexend">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique aut cupiditate. Ipsa tempora ullam repudiandae dignissimos cum sint, nihil blanditiis ipsum officia repellendus! Nesciunt atque distinctio accusantium autem eum!</p>
                    <button type="button" class="text-red-700 bg-red-300 border-2 border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Learn more <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center drop-shadow-2xl border-2 border-red-300 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover border-2 border-red-200 ml-1 p-1 w-full rounded h-96 md:h-48 md:w-48 " src="images/med.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-400 dark:text-white">Medicine</h5>
                    <p class="mb-3 font-normal text-white indent-8 dark:text-gray-400 font-Lexend">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique aut cupiditate. Ipsa tempora ullam repudiandae dignissimos cum sint, nihil blanditiis ipsum officia repellendus! Nesciunt atque distinctio accusantium autem eum!</p>
                    <button type="button" class="text-red-700 bg-red-300 border-2 border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Learn more <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-10 ml-10">
            <a href="#" class="flex flex-col items-center drop-shadow-2xl border-2 border-red-300 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover border-2 border-red-200 ml-1 p-1 w-full rounded h-96 md:h-48 md:w-48 " src="images/cons.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-400 dark:text-white">Expert Consultancy</h5>
                    <p class="mb-3 font-normal text-white indent-8 dark:text-gray-400 font-Lexend">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique aut cupiditate. Ipsa tempora ullam repudiandae dignissimos cum sint, nihil blanditiis ipsum officia repellendus! Nesciunt atque distinctio accusantium autem eum!</p>
                    <button type="button" class="text-red-700 bg-red-300 border-2 border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Learn more <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
                
            </a>
            <a href="#" class="flex flex-col items-center drop-shadow-2xl border-2 border-red-300 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover border-2 border-red-200 ml-1 p-1 w-full rounded h-96 md:h-48 md:w-48 " src="images/bed.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-400 dark:text-white">Bed Facility</h5>
                    <p class="mb-3 font-normal text-white indent-8 dark:text-gray-400 font-Lexend">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique aut cupiditate. Ipsa tempora ullam repudiandae dignissimos cum sint, nihil blanditiis ipsum officia repellendus! Nesciunt atque distinctio accusantium autem eum!</p>
                    <button type="button" class="text-red-700 bg-red-300 border-2 border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Learn more <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </a>
            <a href="#" class="flex flex-col items-center drop-shadow-2xl border-2 border-red-300 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover border-2 border-red-200 ml-1 p-1 w-full rounded h-96 md:h-48 md:w-48 " src="images/care.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-400 dark:text-white">Total Care</h5>
                    <p class="mb-3 font-normal text-white indent-8 dark:text-gray-400 font-Lexend">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique aut cupiditate. Ipsa tempora ullam repudiandae dignissimos cum sint, nihil blanditiis ipsum officia repellendus! Nesciunt atque distinctio accusantium autem eum!</p>
                    <button type="button" class="text-red-700 bg-red-300 border-2 border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Learn more <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </a>
        </div>
    </div>
@endsection