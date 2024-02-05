<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title')</title>
</head>
<body>
        <div class="flex flex-row bg-[#CA0202] justify-between pt-4 pb-4">
            <p class="text-[29px] text-white font-bold pl-14"><a href="">TRIBUNA</a></p>
            <div class="text-[29px] text-white font-medium pr-14">
                <span>{{$user->user_group}}</span>
                <span> - </span>
                <span>{{$user->username}}</span>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="min-w-[20%] min-h-screen bg-black text-white flex flex-col justify-start items-center pt-14 text-[20px] font-bold text-start">

                @if($user->user_group == 'admin')
                    <p>БАЗА ДАНИХ</p>
                        <div class="ml-4 mt-4 text-[18px]">
                            <p class="mt-2"><a href="{{route('admin.events.index')}}" class="hover:underline">ЗАХОДИ</a></p>
                            <p class="mt-2"><a href="{{route('admin.services.index')}}" class="hover:underline">ПОСЛУГИ</a></p>
                            <p class="mt-2"><a href="{{route('admin.food_zones.index')}}" class="hover:underline">ФУД-ЗОНА</a></p>
                            <p class="mt-2"><a href="{{route('admin.gallery.index')}}" class="hover:underline">ГАЛЕРЕЯ</a></p>
                            <p class="mt-2"><a href="{{route('admin.news.index')}}" class="hover:underline">НОВИНИ</a></p>
                            <p class="mt-2"><a href="{{route('admin.reviews.index')}}" class="hover:underline">ВІДГУКИ</a></p>
                        </div>
                    <p  class="mt-4"><a href="{{route('admin.bookings.index')}}" class="hover:underline">БРОНЮВАННЯ</a></p>
                    <p  class="mt-2"><a href="{{route('admin.tickets.index')}}" class="hover:underline">КВИТКИ</a></p>
                    <p  class="mt-2"><a href="{{route('admin.users.index')}}" class="hover:underline">КОРИСТУВАЧІ</a></p>
                @else
                    <p class="mt-8"><a href="{{route('admin.events.index')}}" class="hover:underline">ЗАХОДИ</a></p>
                    <p class="mt-2"><a href="{{route('admin.bookings.index')}}" class="hover:underline">БРОНЮВАННЯ</a></p>
                    <p class="mt-2"><a href="{{route('admin.tickets.index')}}" class="hover:underline">КВИТКИ</a></p>

                @endif
                    <form action="{{route('admin.logout')}}" method="post">
                        @csrf
                        <button type="submit" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Вийти</span>
                        </button>
                    </form>
            </div>
            <div class="ml-10 mt-4 text-black w-5/6 m-auto">

                @yield('content')

            </div>
        </div>

    </div>


</body>
</html>

