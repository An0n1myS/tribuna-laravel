
@extends('layout.app')

@section('title', 'Service page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')

        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">ПОСЛУГА</p>
        <br>
        <br>
    </div>



    <div class="flex flex-row w-5/6 m-auto mt-20">
        <div class="w-[150rem]">
            <img src="{{asset($service->photo)}}" alt="">
        </div>
        <div class="m-10">
            <p class="font-medium text-[24px]">{{$service->name}}</p>
            <p class="text-[16px] mt-8">{!! $service->description !!}</p>
            <p  class="text-[16px] mt-8">{!! $service->price !!}</p>
        </div>
    </div>

    @if($service->id <= 2)
        <div class="w-3/6 m-auto border-b-4 border-red-700 mt-20 pb-6">

            @if($service->id ==2)


                    <form action="{{ route('services.booking_tubing') }}" method="post">
                        @csrf
                        <div class="grid gap-6 mb-6 grid-cols-2">
                            <div>
                                <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900">Ім'я</label>
                                <input type="text" id="user_name" name="user_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Телефон</label>
                                <input type="tel" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="(099) 454-56-78" required>
                            </div>
                        </div>

                        <label for="time_slot" class="block mb-2 text-sm font-medium text-gray-900">Оберіть час</label>
                        <select id="time_slot" name="time_slot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Оберіть час</option>
                            @foreach ($slots as $slot)
                                <option value="{{ $slot->id }}">{{ $slot->slot }}</option>
                            @endforeach
                        </select>
                        <br>

                        <label for="tubing_type" class="block mb-2 text-sm font-medium text-gray-900">Оберіть тип тюбінгу</label>
                        <select id="tubing_type" name="tubing_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Оберіть тюбінг</option>
                            @foreach ($tubingTypes as $tubingType)
                                <option value="{{ $tubingType->id}}">{{ $tubingType->title }}</option>
                            @endforeach
                        </select>
                        <br>

                        <div>
                            <label for="tubing_count" class="block mb-2 text-sm font-medium text-gray-900">Кількість</label>
                            <input type="number" id="tubing_count" name="tubing_count" min="1" value="1" placeholder="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>
                        <br>

                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <button type="submit" class="pl-10 pr-10 text-white bg-[#CA0202] hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center">Забронювати</button>
                    </form>

                @elseif($service->id ==1)

                <form action="{{ route('services.booking_skating') }}" method="post">
                    @csrf

                    <div class="grid gap-6 mb-6 grid-cols-2">
                        <div>
                            <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900">Ім'я</label>
                            <input type="text" id="user_name" name="user_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Телефон</label>
                            <input type="tel" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="(099) 454-56-78" required>
                        </div>
                    </div>

                    <label for="time_slot" class="block mb-2 text-sm font-medium text-gray-900">Оберіть час</label>
                    <select id="time_slot" name="time_slot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected>Оберіть час</option>
                        @foreach($slots as $slot)
                            <option value="{{$slot->id}}">{{$slot->slot}}</option>
                        @endforeach
                    </select>

                    <label for="size" class="block mb-2 text-sm font-medium text-gray-900">Оберіть розмір</label>
                    <select id="size" name="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected>Оберіть розмір</option>
                        @foreach($skatings as $skate)
                            <option value="{{$skate->id}}"  >{{$skate->size}}</option>
                        @endforeach
                    </select>

                    <div>
                        <label for="skating_count" class="block mb-2 text-sm font-medium text-gray-900">Кількість</label>
                        <input type="number" id="skating_count" name="skating_count" min="1" value="1" placeholder="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    </div>

                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <button type="submit" class="mt-4 pl-10 pr-10 text-white bg-[#CA0202] hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-100 font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center">Забронювати</button>
                </form>

            @endif

        </div>
    @else
        <div class="w-3/6 m-auto border-b-4 border-red-700 mt-20">
            <form action="" method="">

            </form>
        </div>
    @endif



    <p class="w-4/5  m-auto text-start text-[40px] font-bold text-[#3B3B3B] mt-24 mb-6">ПОДІЛІТЬСЯ ВРАЖЕННЯМИ ПРО <span class="text-[#CA0202]">TRIBUNA</span></p>

    <p class="w-4/5 m-auto text-start mb-24"><a href="{{route('map')}}" class=" p-4 pl-14 pr-14 bg-[#CA0202] text-[16px] font-bold text-white">Написати відгук</a></p>
@endsection
