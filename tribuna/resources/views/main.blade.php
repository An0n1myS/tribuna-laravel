
@extends('layout.app')

@section('title', 'Main page')

@section('content')
    <div style=" background-image: url('/images/main-bg.png'); background-size: cover; background-repeat: no-repeat;" class="">
        <div class="bg-black bg-opacity-50">

            <br>
            @include('partials.header')
            <br>
            <div class="font-bold mt-24 w-3/5 ml-36 mb-36 text-white">
                <h1 class="text-[46px] w-3/4 mb-6 ">СВЯТКУЙ ЗИМОВІ СВЯТА РАЗОМ З <span class="text-[#CA0202] text-[64px]">TRIBUNA</span></h1>
                <a class="p-14 pt-2 pb-2 bg-[#CA0202] text-white hover:underline " href="{{route('events.index')}}">ПЕРЕГЛЯНУТИ ПОДІЇ</a>
            </div>
            <br>
            <div class="flex flex-row justify-end mr-24">
                <a href="" class="">
                    <svg class="m-5 hover:stroke-[#CA0202] hover:fill-[#CA0202] hover:stroke-2" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" >
                        <path d="M14.3003 3.66675H29.7003C35.567 3.66675 40.3337 8.43341 40.3337 14.3001V29.7001C40.3337 32.5202 39.2134 35.2248 37.2192 37.219C35.2251 39.2131 32.5205 40.3334 29.7003 40.3334H14.3003C8.43366 40.3334 3.66699 35.5667 3.66699 29.7001V14.3001C3.66699 11.4799 4.78729 8.77532 6.78142 6.78118C8.77556 4.78704 11.4802 3.66675 14.3003 3.66675ZM13.9337 7.33341C12.1832 7.33341 10.5045 8.02877 9.26675 9.26651C8.02901 10.5043 7.33366 12.183 7.33366 13.9334V30.0667C7.33366 33.7151 10.2853 36.6667 13.9337 36.6667H30.067C31.8174 36.6667 33.4962 35.9714 34.7339 34.7337C35.9716 33.4959 36.667 31.8172 36.667 30.0667V13.9334C36.667 10.2851 33.7153 7.33341 30.067 7.33341H13.9337ZM31.6253 10.0834C32.2331 10.0834 32.816 10.3249 33.2458 10.7546C33.6756 11.1844 33.917 11.7673 33.917 12.3751C33.917 12.9829 33.6756 13.5658 33.2458 13.9955C32.816 14.4253 32.2331 14.6667 31.6253 14.6667C31.0175 14.6667 30.4346 14.4253 30.0049 13.9955C29.5751 13.5658 29.3337 12.9829 29.3337 12.3751C29.3337 11.7673 29.5751 11.1844 30.0049 10.7546C30.4346 10.3249 31.0175 10.0834 31.6253 10.0834ZM22.0003 12.8334C24.4315 12.8334 26.7631 13.7992 28.4821 15.5183C30.2012 17.2374 31.167 19.5689 31.167 22.0001C31.167 24.4312 30.2012 26.7628 28.4821 28.4819C26.7631 30.201 24.4315 31.1667 22.0003 31.1667C19.5692 31.1667 17.2376 30.201 15.5185 28.4819C13.7994 26.7628 12.8337 24.4312 12.8337 22.0001C12.8337 19.5689 13.7994 17.2374 15.5185 15.5183C17.2376 13.7992 19.5692 12.8334 22.0003 12.8334ZM22.0003 16.5001C20.5416 16.5001 19.1427 17.0795 18.1112 18.111C17.0798 19.1424 16.5003 20.5414 16.5003 22.0001C16.5003 23.4588 17.0798 24.8577 18.1112 25.8892C19.1427 26.9206 20.5416 27.5001 22.0003 27.5001C23.459 27.5001 24.858 26.9206 25.8894 25.8892C26.9209 24.8577 27.5003 23.4588 27.5003 22.0001C27.5003 20.5414 26.9209 19.1424 25.8894 18.111C24.858 17.0795 23.459 16.5001 22.0003 16.5001Z" fill="white"/>
                    </svg>
                </a>
                <a href="">
                    <svg class="m-5 hover:stroke-[#CA0202] hover:fill-[#CA0202] hover:stroke-2" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="white">
                        <path d="M19.6078 16.3847V18.9092H17.7598V21.9947H19.6078V31.1668H23.4064V21.9947H25.9548C25.9548 21.9947 26.1949 20.5152 26.3104 18.8963H23.4211V16.788C23.4211 16.4708 23.8354 16.0473 24.2461 16.0473H26.3141V12.8335H23.4999C19.5143 12.8335 19.6078 15.9227 19.6078 16.3847Z" fill="white"/>
                        <path d="M11.0003 7.33341C10.0279 7.33341 9.09523 7.71972 8.4076 8.40736C7.71997 9.09499 7.33366 10.0276 7.33366 11.0001V33.0001C7.33366 33.9725 7.71997 34.9052 8.4076 35.5928C9.09523 36.2804 10.0279 36.6667 11.0003 36.6667H33.0003C33.9728 36.6667 34.9054 36.2804 35.5931 35.5928C36.2807 34.9052 36.667 33.9725 36.667 33.0001V11.0001C36.667 10.0276 36.2807 9.09499 35.5931 8.40736C34.9054 7.71972 33.9728 7.33341 33.0003 7.33341H11.0003ZM11.0003 3.66675H33.0003C34.9452 3.66675 36.8105 4.43937 38.1858 5.81463C39.561 7.1899 40.3337 9.05516 40.3337 11.0001V33.0001C40.3337 34.945 39.561 36.8103 38.1858 38.1855C36.8105 39.5608 34.9452 40.3334 33.0003 40.3334H11.0003C9.0554 40.3334 7.19014 39.5608 5.81488 38.1855C4.43961 36.8103 3.66699 34.945 3.66699 33.0001V11.0001C3.66699 9.05516 4.43961 7.1899 5.81488 5.81463C7.19014 4.43937 9.0554 3.66675 11.0003 3.66675Z" fill="white"/>
                    </svg>
                </a>
                <a href="">
                    <svg class="m-5 hover:stroke-[#CA0202] hover:fill-[#CA0202] hover:stroke-2" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                        <path d="M29.3337 3.66675H14.667C8.60049 3.66675 3.66699 8.60025 3.66699 14.6667V38.5001C3.66699 38.9863 3.86015 39.4526 4.20396 39.7964C4.54778 40.1403 5.0141 40.3334 5.50033 40.3334H29.3337C35.4002 40.3334 40.3337 35.3999 40.3337 29.3334V14.6667C40.3337 8.60025 35.4002 3.66675 29.3337 3.66675ZM36.667 29.3334C36.667 33.3777 33.378 36.6667 29.3337 36.6667H7.33366V14.6667C7.33366 10.6224 10.6227 7.33341 14.667 7.33341H29.3337C33.378 7.33341 36.667 10.6224 36.667 14.6667V29.3334Z" fill="white"/>
                        <path d="M12.833 16.5H31.1663V20.1667H12.833V16.5ZM12.833 23.8333H25.6663V27.5H12.833V23.8333Z" fill="white"/>
                    </svg>
                </a>

            </div>
            <br>
            <br>
            <br>
        </div>
    </div>

    <p class="font-bold mt-24 w-3/5 ml-36 mb-32 text-[#3B3B3B] text-[40px]">ЩО ТАКЕ ЦЯ ВАША <span class="text-[#CA0202]" >TRIBUNA</span>...?</p>


    <div class="swiper mb-8 w-4/5">
        <div class="swiper-wrapper mb-14">
            <div class="swiper-slide w-[90%] m-auto flex flex-row mr-2">
                <img src="{{asset('/images/slider-img.png')}}" class="w-3/6 " alt="">
                <div class=" flex flex-col justify-evenly ml-14 w-full">
                    <p class="text-[40px] font-bold">... це <span class="text-[#CA0202]">місце</span></p>
                    <p class="text-[20px] font-bold">що одночасно надихає та розслабляє. Гарні локації, зручний сервіс, багато подій та послуг. Місце, де об'єднуються розваги та відпочинок, створюючи унікальний простір для ідеального дозвілля! Ваші друзі вже у нас, а ви там де?</p>
                </div>
            </div>
            <div class="swiper-slide w-[90%] m-auto flex flex-row mr-2">
                <img src="{{asset('/images/slider-img.png')}}" class="w-3/6 " alt="">
                <div class=" flex flex-col justify-evenly ml-14 w-full">
                    <p class="text-[40px] font-bold">... це <span class="text-[#CA0202]">атмосфера</span></p>
                    <p class="text-[20px] font-bold">теплоти та задоволення, де кожен відвідувач відчуває себе частиною дружної спільноти. Затишні та красиві локації, де ви можете насолоджуватися кавою, кальяном, випивкою та їжею з друзями, створюють атмосферу, в якій кожна зустріч стає особливою</p>
                </div>
            </div>
            <div class="swiper-slide w-[90%] m-auto flex flex-row mr-2">
                <img src="{{asset('/images/slider-img.png')}}" class="w-3/6 " alt="">
                <div class=" flex flex-col justify-evenly ml-14 w-full">
                    <p class="text-[40px] font-bold">... це <span class="text-[#CA0202]">майданчик</span></p>
                    <p class="text-[20px] font-bold">де постійно відбувається двіж. Концерти, стендапи, квізи, тематичні вечори - все це тут! Широкий вибір послуг та дружня атмосфера роблять його ідеальним місцем для сімейних пригод та веселих вечорів</p>
                </div>
            </div>
            <div class="swiper-slide w-[90%] m-auto flex flex-row mr-2">
                <img src="{{asset('/images/slider-img.png')}}" class="w-3/6 " alt="">
                <div class=" flex flex-col justify-evenly ml-14 w-full">
                    <p class="text-[40px] font-bold">... це <span class="text-[#CA0202]">враження</span></p>
                    <p class="text-[20px] font-bold">яке залишається в пам'яті: свіже повітря під відкритим небом, сміх та радість - ось те, що робить це місце особливим. Від веселих та емоційних моментів на ковзанці до затишних дружніх посиденьків за переглядом кіно - кожен візит тут запам'ятовується</p>
                </div>
            </div>

        </div>

        <div class="swiper-pagination text-[#CA0202]"></div>


    </div>

    <div class="w-5/6 m-auto">
        <div class="w-full text-end mb-5">
            <p class="font-bold  text-[40px] mb-8 mt-24 text-[#3B3B3B]">СКОРО ВІДБУДУТЬСЯ НОВІ <span class="text-[#CA0202]">ЗАХОДИ</span></p>
            <div class="flex flex-row justify-evenly font-bold">
                @foreach($events as $event)

                    <div class="m-8 mt-0 mb-0 flex flex-col justify-end bg-gray-100">
                        <img src="{{asset($event->photo)}}" alt="" class=" max-w-[380px]">
                        <p class="m-5 text-center">{{$event->name}}</p>
                        <div class="flex flex-row justify-around pb-4">
                            <p>{{ \Carbon\Carbon::parse($event->date_time)->format('d.m.Y') }}</p>
                            <p>{{ \Carbon\Carbon::parse($event->date_time)->format('H:i') }}</p>
                            @if($event->free_event == 1)
                                <p>Free</p>

                            @else
                                <p>{{$event ->price}} грн.</p>
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


    <p class="w-4/6 text-[40px] ml-32 mt-24 mb-8 font-bold text-[#3B3B3B]" >БУДЬТЕ В КУРСІ ОСТАННІХ <span class="text-[#CA0202]">НОВИН</span></p>

    <div class="flex flex-row w-5/6 m-auto mb-32 ">
        @foreach($all_news as $news)
            <div class="flex flex-row bg-gray-100 mr-5 w-[55%]">
                <img src="{{asset($news->photo)}}" alt="" class="min-w-[40%] max-w-[40%] max-h-[100%] min-h-[100%]">
                <div class="flex flex-col  text-[#3B3B3B] p-3 justify-evenly " >
                    <p class="text-[24px]">{{$news->title}}</p>
                    <p class="text-[14px]  ">{{ Str::limit($news->description, 300) }}</p>
                    <p class="text-[12px]">{{ \Carbon\Carbon::parse($news->date)->format('d.m.Y') }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <p class="text-center text-[40px] font-bold text-[#3B3B3B]">ЩО ЩЕ <span class="text-[#CA0202]">ЦІКАВОГО</span>?</p>

    <div class="flex flex-row w-4/5 m-auto text-[42px] text-white  justify-around ">
        <div class="p-28 pr-18 pl-18 font-bold text-center m-5 min-w-[35%]  flex justify-center items-center bg-opacity-50" style="background-image: url('/images/bottom_menu_1.jpg');  background-repeat: no-repeat;">
            <a href="{{route('services.index')}}" class="hover:underline">ПОСЛУГИ</a>
        </div>
        <div class="text-[40px] p-28 pr-18 pl-18 font-bold text-center m-5 min-w-[35%] w-full flex justify-center items-center bg-opacity-50" style="background-image: url('/images/bottom_menu_2.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="{{route('food_zones.index')}}" class="hover:underline">ФУДЗОНА</a>
        </div>
        <div class="p-28 pr-18 pl-18 font-bold text-center m-5 min-w-[35%]  flex justify-center items-center bg-opacity-50" style="background-image: url('/images/bottom_menu_3.jpg'); background-size: cover; background-repeat: no-repeat;">
            <a href="{{route('gallery')}}" class="hover:underline">ГАЛЕРЕЯ</a>
        </div>
    </div>

    <div class="max-w-[90.3%] w-full m-auto font-bold text-center text-[48px] text-white p-6 mb-22" style="background-image: url('/images/bottom_menu_3.jpg'); background-size: cover; background-repeat: no-repeat; ">
        <a href="{{route('map')}}" class="hover:underline">ІНТЕРАКТИВНА МАПА</a>
    </div>
    <br>

@endsection
