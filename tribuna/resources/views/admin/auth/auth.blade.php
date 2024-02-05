
@extends('layout.auth')

@section('title', 'Вхід адмін панель')

@section('content')
    <div class="w-full h-screen flex items-center justify-center" style="background-image: url('/images/main-bg.png'); background-repeat: no-repeat; background-size: cover;">

        <div class="absolute top-0 mt-5 w-full">
            <br>
            @include('partials.header')
            <br>
        </div>
        <div class="w-2/5 bg-black rounded-lg p-14 bg-opacity-50">
            <form action="{{ route('admin.login_process') }}" method="post" class="space-y-6">
                @csrf
                <p class="text-white font-bold text-[40px] mr-24">АВТОРИЗАЦІЯ</p>
                <div class="mt-8">
                    <label for="username" class="text-white block mb-2">Логін:</label>
                    <input type="text" id="username" name="username" class="w-full p-2 border border-white rounded">
                </div>
                <div class="mt-8 mb-8">
                    <label for="password" class="text-white block mb-2">Пароль:</label>
                    <input type="password" id="password" name="password" class="w-full p-2 border border-white rounded">
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="bg-[#CA0202] text-white font-bold  w-full p-2">Увійти</button>
                </div>
            </form>
        </div>
    </div>



@endsection
