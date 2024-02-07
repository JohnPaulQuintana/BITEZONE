@extends('welcome')

@section('contents')
    <div class="grid grid-cols-2 pt-20 h-auto">
        <div id="list" class="border">
        <ul class="gap-8 text-xl font-mono font-bold text-center">
            <li class="cursor-pointer hover:text-red-200 p-2"><a href="{{ url('/dashboard') }}">Mariveles District Hospital</a></li>
            <li class="cursor-pointer hover:text-red-200 p-2"><a href="{{ route('location') }}">Mariveles Main Health Center</a></li>
            <li class="cursor-pointer hover:text-red-200 p-2"><a href="{{ route('home') }}">Mariveles Health Service Cooperative Hospital</a></li>
            <li class="cursor-pointer hover:text-red-200 p-2"></i>Bepza Medical Center</li>
            <li class="cursor-pointer hover:text-red-200 p-2">Brgy. Maligaya Health Center</li>
            <li class="cursor-pointer hover:text-red-200 p-2">Poblacion Health Center</li>
        </ul>
        </div>
        <div id="map" class="border">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.8184012056404!2d120.49263457169238!3d14.437626761837468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339618ceba3684b5%3A0xff96824b50d2abf9!2sMariveles%20District%20Hospital!5e0!3m2!1sen!2sph!4v1707306900886!5m2!1sen!2sph" 
                width="900" 
                height="750" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.log('hjdwahdjkwa')
    </script>
@endsection