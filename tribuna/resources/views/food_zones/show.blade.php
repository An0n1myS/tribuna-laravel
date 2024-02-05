
@extends('layout.app')

@section('title', 'Event page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')

        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">ФУД-ЗОНА</p>
        <br>
        <br>
    </div>



    <div class="flex flex-row w-5/6 m-auto mt-20">
        <div class="w-[150rem]">
            <img src="{{asset($food_zone->photo)}}" alt="">
        </div>
        <div class="m-10">
            <p class="font-medium text-[24px]">{{$food_zone->name}}</p>
            <p class="text-[16px] mt-8">{!! $food_zone->description !!}</p>
            <br>
            <a href="{{asset($food_zone->menu_url)}}" class="p-4 pr-8 pl-8 bg-[#CA0202] text-white hover:underline">Переглянути меню</a>
        </div>
    </div>

    <div class="w-3/6 m-auto border-b-4 border-red-700 mt-20">

    </div>


    <p class="w-4/5  m-auto text-start text-[40px] font-bold text-[#3B3B3B] mt-24 mb-6">ПОДІЛІТЬСЯ ВРАЖЕННЯМИ ПРО <span class="text-[#CA0202]">TRIBUNA</span></p>

    <p class="w-4/5 m-auto text-start mb-24"><a href="{{route('map')}}" class=" p-4 pl-14 pr-14 bg-[#CA0202] text-[16px] font-bold text-white">Написати відгук</a></p>
@endsection
