
@extends('layout.app')

@section('title', 'Event page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')

        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">НОВИНА</p>
        <br>
        <br>
    </div>



    <div class="flex flex-row w-5/6 m-auto mt-20">
        <div class="w-[150rem]">
            <img src="{{asset($news->photo)}}" alt="">
        </div>
        <div class="m-10">
            <p class="font-medium text-[24px]">{{$news->title}}</p>
            <p class="text-[16px] mt-8">{!! $news->description !!}</p>
            <div class="mt-3">
                {{ \Carbon\Carbon::parse($news->date)->format('d.m.Y') }}
            </div>
        </div>
    </div>

    <div class="w-3/6 m-auto border-b-4 border-red-700 mt-20">
        <form action="" method="">

        </form>
    </div>


    <p class="w-4/5  m-auto text-start text-[40px] font-bold text-[#3B3B3B] mt-24 mb-6">ПОДІЛІТЬСЯ ВРАЖЕННЯМИ ПРО <span class="text-[#CA0202]">TRIBUNA</span></p>

    <p class="w-4/5 m-auto text-start mb-24"><a href="{{route('map')}}" class=" p-4 pl-14 pr-14 bg-[#CA0202] text-[16px] font-bold text-white">Написати відгук</a></p>
@endsection
