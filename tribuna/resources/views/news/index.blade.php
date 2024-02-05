
@extends('layout.app')

@section('title', 'Event page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')
    </div>
    <div class="" style=" background-image: url('/events_url/top.png'); background-repeat: no-repeat;">
        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">НОВИНИ</p>
        <br>
        <br>
    </div>

    <p class="w-4/5 m-auto text-start text-[48px] font-bold text-[#3B3B3B] mt-24 mb-14">ПОСТІЙНО ЩОСЬ ВІДБУВАЄТЬСЯ</p>


    <div class="grid grid-cols-2 w-5/6 m-auto mb-32 gap-10">
        @foreach($all_news as $news)
        <div class="flex flex-row bg-gray-100 max-h-[20rem]">
            <img src="{{asset($news->photo)}}" alt="" class="max-w-[40%] h-full">
            <div class="flex flex-col text-[#3B3B3B] p-10 justify-evenly w-full">
                <p class="text-[24px]">{{$news->title}}</p>
                <p class="text-[14px]  ">{{ Str::limit($news->description, 150) }}</p>

                <div class="flex flex-row justify-between items-center">
                    <p class="text-[12px]">{{ \Carbon\Carbon::parse($news->date)->format('d.m.Y') }}</p>
                    <a href="{{route('news.show',['news'=>$news->id])}}" class="hover:underline">Детальніше -></a>
                </div>
            </div>
        </div>
        @endforeach


    </div>




@endsection
