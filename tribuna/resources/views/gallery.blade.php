
@extends('layout.app')

@section('title', 'Gallery page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')
    </div>
    <div class="" style=" background-image: url('/events_url/top.png'); background-repeat: no-repeat;">
        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">ГАЛЕРЕЯ</p>
        <br>
        <br>
    </div>

    <p class="w-4/5  m-auto text-start text-[48px] font-bold text-[#3B3B3B] mt-24 mb-14">СТВОРЮЙТЕ СПОГАДИ РАЗОМ З <span class="text-[#CA0202]">TRIBUNA</span></p>



    <div class="grid grid-cols-3 gap-4 w-5/6 m-auto mb-24">
        @foreach($gallerys as $gallery)
            <div>
                <img class="max-w-[400px] min-h-full rounded-lg" src="{{asset($gallery->photo_url)}}" alt="">
            </div>
        @endforeach

    </div>






@endsection
