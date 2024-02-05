@extends('layout.admin')

@section('title', 'Stylist page')

@section('content')




    <p class="font-bold mt-8 w-3/5 ml-10 mb-10 text-[#3B3B3B] text-[40px]">Редагувати користувача </p>

    <div class="relative overflow-x-auto bg-white text-[12px] mt-8  ml-10 ">
        <table>
            <thead class="text-xl text-gray-700 uppercase bg-gray-40 ">
            <tr class="bg-white ">
                <form class="mb-10 w-5/6 m-auto flex flex-row justify-evenly items-center h-full" action="{{route('admin.users.update',['user_guest'=>$user_guest->id])}}" method="post">
                    @csrf
                    @method('put')
                    <th class="mb-4">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Ім'я користувача</label>
                        <input type="text" id="username" value="{{$user_guest->username}}" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2" required>
                    </th>
                    <td class="mb-4">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Пароль</label>
                        <input type="text" id="password" value="{{$user_guest->password}}" name="password" class="mr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2" required>
                    </td>
                    <td class="mr-16">
                        <label for="user_group" class="block mb-2 text-sm font-medium text-gray-900">Спеціалізація</label>
                        <select id="user_group" name="user_group" class="mr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 ">
                            <option selected>Оберіть спеціалізацію</option>
                            <option value="admin">admin</option>
                            <option value="manager" >manager</option>

                        </select>
                    </td>
                    <td class="ml-6">
                        <button type="submit" class="p-5 ml-6  pt-2 pb-2 bg-[#CA0202] rounded-lg text-white text-[16px] font-bold">Зберегти</button>
                    </td>
                </form>
            </tr>
            </thead>
        </table>

    </div>

@endsection


