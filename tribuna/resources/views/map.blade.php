
@extends('layout.app')

@section('title', 'Gallery page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')
    </div>
    <div class="" style=" background-image: url('/events_url/top.png'); background-repeat: no-repeat;">
        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">МАПА ТА ВІДГУКИ</p>
        <br>
        <br>
    </div>


    <p class="font-bold mt-16 w-3/5 ml-36 mb-16 text-[#3B3B3B] text-[40px]">НЕ ЗАГУБІТЬСЯ </p>

    <div class="w-5/6 m-auto">
        <div class="realative w-full h-full">
            <svg class="absolute left-0 w-[99.9%] h-[99.1%] " viewBox="0 0 3090.6667 1766.6667" >
                <path class=" fill-transparent stroke-2 hover:fill-gray-300 hover:stroke-2 hover: opacity-40 " d="M 626.47158,658.18902 525.00475,767.25469 657.01911,814.42236 757.42107,703.99715 Z"></path>
                <path class=" fill-transparent stroke-2 hover:fill-gray-300 hover:stroke-2 hover: opacity-40 " d="m 1531.4011,1223.5237 v 338.2105 l 1261.0357,0.01 7e-4,-338.2118 z"></path>
                <path class=" fill-transparent stroke-2 hover:fill-gray-300 hover:stroke-2 hover: opacity-40 " d="m 2399.8762,1622.1471 -0.221,106.1544 134.262,0.044 1.149,-106.1986 z"></path>
                @foreach($items as $item)
                    <path description-date="
                        <div class='flex flex-col border-2 border-black'>
                            <img class='w-full max-h-[220px]' src='{{asset($item->photo_url)}}' alt=''>
                            <div class='p-10 pt-0'>
                                <p class='font-bold mt-6 w-full text-[#3B3B3B] text-[24px]'>{{$item->title}}</p>
                                <p class=' mt-6 w-full text-[#3B3B3B] text-[16px] mb-4'>{{$item->description}}</p>
                                <a class='bg-[#CA0202] p-5 pt-2 pb-2 w-2/5 text-white text-[24px] font-bold ' href='{{$item->info_url}}'>Детальніше</a>
                            </div>
                        </div>
                    " class="part fill-transparent stroke-2 hover:fill-gray-300 hover:stroke-2 hover: opacity-40 " d="{{$item->path}}"></path>
                @endforeach


            </svg>
            <img src="{{asset('images/map.png')}}" alt="">
            <div class=" panel absolute box-border max-w-[30%] max-h-[76%] left-20 top-[60%] bg-white" style="display:none;"></div>
        </div>
    </div>


    <br>

    <div class="w-5/6 m-auto">
        <div class="w-full text-start mb-24">
            <p class="font-medium ml-8 text-[48px] mb-8 mt-24 text-[#3B3B3B]">ВАШІ ВІДГУКИ</p>

            <div class="flex items-center justify-center mt-10 mb-10">
                <div class="custom-select">
                    <select id="selectSort" class="border-b-2 border-red-500 text-[24px] font-medium">
                        <option selected value="1">НАЙНОВІШІ</option>
                        <option value="2">НАЙСТАРІШІ</option>
                    </select>
                    <select id="selectCategory" class="border-b-2 border-red-500 text-[24px] font-medium ml-4">
                        <option selected value="1">ВСІ</option>
                        <option value="2">Фуд-зона</option>
                        <option value="3">Послуги</option>
                        <option value="4">Заходи</option>
                        <option value="5">Загальне</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 " id="comments-container">

                @foreach($reviews as $review)
                    <div class="bg-gray-100 p-10 flex flex-col justify-between text-[#646464]">
                        <div class="flex flex-row justify-between w-full mb-4">
                            <p class="font-bold">{{$review->name}}</p>
                            <p>{{$review->category->title}}</p>
                        </div>
                        <p class="mb-4">{{$review->content}}</p>

                        <p>{{$review->created_at}}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <br>


    <p class="font-bold mt-16 w-3/5 ml-36 mb-16 text-[#3B3B3B] text-[40px]">ПОДІЛІТЬСЯ ВРАЖЕННЯМИ ПРО <span class="text-[#CA0202]">TRIBUNA</span> </p>


    <div class="flex flex-row w-4/5 m-auto mb-32">
        <form action="{{route('add-comments')}}" method="post" class="w-full mr-14">
            @csrf
            <div class="mb-4">
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Ім'я</label>
                <input type="text" id="first_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 " required>
            </div>
            <br>


            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Оберіть категорію відгуку</label>
            <select id="countries" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option selected>Оберіть категорію</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>

            <br>
            <div class="mb-4">

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Ваш відгук</label>
                <textarea id="message" rows="4"  name="description"   class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Напишіть опис тут"></textarea>

            </div>
            <button class="bg-[#CA0202] rounded-lg p-8 pt-2 pb-2 text-[20px] text-white ">Надіслати</button>
        </form>
        <img src="{{asset('/images/Frame223.png')}}" class="max-w-[50%]" alt="">
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(function() {
            var timeout;

            $('.part').hover(
                function () {
                    var description = $(this).attr('description-date');
                    $('.panel').stop().html(description).fadeIn();
                },
                function () {
                    timeout = setTimeout(function () {
                        $('.panel').fadeOut(50);
                    }, 500); // Затримка 500 мс
                }
            );

            // Додайте обробник події для видалення таймера при виході з області .part
            $('.part').mouseleave(function () {
                clearTimeout(timeout);
            });
        });
    </script>

@endsection
