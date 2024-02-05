
@extends('layout.app')

@section('title', 'Event page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')

        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">ЗАХІД</p>
        <br>
        <br>
    </div>



    <div class="flex flex-row w-5/6 m-auto mt-20">
        <div class="min-w-[35rem] max-w-[35rem]">
            <img src="{{asset($event->photo)}}" alt="">
        </div>
        <div class="m-10">
            <p class="font-medium text-[24px]">{{$event->name}}</p>
            <p class="text-[16px] mt-8">{!! $event->description !!}</p>
            <div class="mt-3">
                <p class="font-medium">Час проведення:</p>
                <p>{{$event->date_time}}</p>
            </div>

            @if($event->free_event==true)
                <p class="mt-5 font-medium">Вхід вільний</p>
            @else
                <div class="mt-5">
                    <p>Ціна за квиток:</p>
                    <p>{{$event->price}}</p>
                </div>
                <div class="">
                    <p>Кількість квитків:</p>
                    <span>{{$event->available_tickets}}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="w-3/6 m-auto border-b-4 border-red-700 mt-20 pb-20">
        @if($event->free_event==true)

        @else
            <p class="text-[40px] text-[#3B3B3B] text-center font-bold mb-10">Замовлення квитка</p>
            <form action="{{route('ticket_init')}}" method="post">
                @csrf
                <div class="grid gap-6 mb-6 grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Ім'я</label>
                        <input type="text" id="user_name" name="user_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " placeholder="John" required>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Телефон</label>
                        <input type="tel" id="phone" name="phone"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="(099) 454-56-78"  required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Пошта</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="john.doe@company.com" required>
                </div>
                <div>
                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 ">Кількість квитків</label>
                    <input type="number" id="tickets_count" name="tickets_count" min="1" value="1" placeholder="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  required>
                </div>
                <br>
                <input type="hidden" name="event_id" id="event_id" value="{{$event->id}}">
                <input type="hidden" name="status" id="status" value="В обробці">
                <button type="submit" class="pl-10 pr-10 text-white bg-[#CA0202] hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Оплатити</button>
            </form>
        @endif


    </div>


    <p class="w-4/5  m-auto text-start text-[40px] font-bold text-[#3B3B3B] mt-24 mb-6">ПОДІЛІТЬСЯ ВРАЖЕННЯМИ ПРО <span class="text-[#CA0202]">TRIBUNA</span></p>

    <p class="w-4/5 m-auto text-start mb-24"><a href="{{route('map')}}" class=" p-4 pl-14 pr-14 bg-[#CA0202] text-[16px] font-bold text-white">Написати відгук</a></p>
@endsection
