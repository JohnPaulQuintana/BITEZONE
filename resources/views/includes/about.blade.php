@extends('welcome')

@section('contents')
    <div>
        <div class="pt-20 text-center text-7xl font-Paytone text-red-500 drop-shadow-2xl">
                <h1>ABOUT</h1>
        </div>
        <div class="grid grid-cols-2">
            <div class="flex justify-center">
                <img class="rounded-full overflow-hidden h-fit mt-5 p-10 border-4 border-red-500" id="dr" src="images/doc2.gif" alt="">
            </div>
            <div class="">
                <h1 class="text-6xl mt-14 font-Paytone text-red-400">What Makes Us Better, <br> Makes you Better.</h1>
                <p class="mt-14 w-10/12">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit incidunt deleniti eum et consequuntur quas rerum, officia ea vel culpa quo velit labore a, aut fugit saepe esse sapiente voluptatibus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur nihil nam quia aliquid vitae ea, eos iste explicabo atque hic ex error deserunt quas alias quidem pariatur, vero recusandae voluptas? <br><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, eligendi, exercitationem vero laudantium sed explicabo sint soluta impedit suscipit doloremque eaque perferendis earum optio ea amet laborum? Dolores, facilis eveniet?</p>
                <button type="button" class=" mt-14 text-red-700 bg-red-300 border-2 border-red-700 hover:bg-red-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Learn more <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
            </div>
        </div>
    </div>
@endsection