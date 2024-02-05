@extends('layout.admin')

@section('title', 'Stylist page')

@section('content')




    <p class="font-bold mt-16 w-3/5 ml-10 mb-10 text-[#3B3B3B] text-[40px]">Користувачі </p>
    <table>
        <thead class="text-xl text-gray-700 uppercase bg-gray-40 ">
        <tr class="bg-white ">
            <form class="mb-10 w-5/6 m-auto flex flex-row justify-evenly items-center h-full" action="{{route('admin.users.store')}}" method="post">
                @csrf
                <th class="mb-4">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Ім'я користувача</label>
                    <input type="text" id="first_name" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2" required>
                </th>
                <td class="mb-4">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Пароль</label>
                    <input type="text" id="first_name" name="password" class="mr-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2" required>
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
                    <button type="submit" class="p-5 ml-6  pt-2 pb-2 bg-[#CA0202] rounded-lg text-white text-[16px] font-bold">Створити</button>
                </td>
            </form>
        </tr>
        </thead>
    </table>
    <div class="relative overflow-x-auto bg-white text-[16px] mt-10  ml-10">


        <br>
        <table class= "text-left text-gray-500 ">
            <thead class=" text-gray-700 uppercase bg-white ">
            <tr>
                <th scope="col" class="px-5 py-3">
                    Username
                </th>

                <th scope="col" class="px-5 py-3">
                    password
                </th>
                <th scope="col" class="px-5 py-3">
                    user_group
                </th>
                <th scope="col" class="px-5 py-3">
                    Action
                </th>
                <th scope="col" class="px-5 py-3">
                    Delete
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($db_users as $guest)
                <tr class="bg-white border-b hover:bg-gray-50 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <span class="view-mode">{{ $guest->username }}</span>
                        </th>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $guest->password }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $guest->user_group }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('admin.users.edit',['user_guest'=>$guest->id])}}" class="view-mode edit-button font-medium text-blue-600  hover:underline">Edit</a>
                        </td>

                    <td class="px-6 py-4">
                        <form class="delete-form " action="{{route('admin.users.delete',['user_guest'=>$guest->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button  font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection


