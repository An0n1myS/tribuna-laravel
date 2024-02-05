
@extends('layout.app')

@section('title', 'Event page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')
    </div>
    <div class="" style=" background-image: url('/events_url/top.png'); background-repeat: no-repeat;">
        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">ПОСЛУГИ</p>
        <br>
        <br>
    </div>
    @if(session('success'))
        <div class="alert alert-success text-[#CA0202] text-center text-[24px] font-bold mt-20">
            {{ session('success') }}
        </div>
    @endif
    <p class="w-4/5 m-auto text-start text-[40px] font-bold text-[#3B3B3B] mt-24 mb-14">АКТУАЛЬНІ</p>

    <div class="grid grid-cols-3 gap-4 w-5/6 m-auto text-[40px] text-white justify-around mb-24">
        @foreach($actual_services as $service)
            <div class=" p-28 pr-18 pl-18 pb-18 font-bold text-center min-w-[35%] flex flex-col justify-center items-center" style="background-image: url({{$service->photo}}); background-size: cover; background-repeat: no-repeat;">
                <a href="{{route('services.show',['service'=>$service->id])}}" class="hover:underline ">{{$service->name}}</a>
            </div>
        @endforeach

    </div>

    <p class="w-4/5  m-auto text-start text-[40px] font-bold text-[#3B3B3B] mt-24 mb-14">СПРОБУЙ ВСЕ У <span class="text-[#CA0202]">TRIBUNA</span></p>

    <div class="grid grid-cols-3 gap-4 w-5/6 m-auto text-[40px] text-white justify-around mb-24">

        @foreach($services as $service)
            <div class=" p-28 pr-18 pl-18 pb-18 font-bold text-center min-w-[35%] flex flex-col justify-center items-center" style="background-image: url({{$service->photo}}); background-size: cover; background-repeat: no-repeat;">
                <a href="{{route('services.show',['service'=>$service->id])}}" class="hover:underline">{{$service->name}}</a>
            </div>
        @endforeach

    </div>





@endsection
