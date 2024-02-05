@extends('layout.admin')

@section('title', 'Stylist page')

@section('content')




    <p class="font-bold mt-16 w-3/5 ml-10 mb-10 text-[#3B3B3B] text-[40px]">Послуги </p>
    <div class="mb-10 w-5/6 m-auto flex flex-row justify-end">
        <a href="{{route('admin.services.create')}}" class="p-10  pt-3 pb-3 bg-[#CA0202] rounded-lg text-white text-[16px] font-bold">Створити</a>
    </div>
    <div class="relative overflow-x-auto bg-white text-[16px] mt-10  ml-10">


        <br>
        <table class= "text-left text-gray-500 ">
            <thead class=" text-gray-700 uppercase bg-white ">
            <tr>
                <th scope="col" class="px-5 py-3">
                    name
                </th>
                <th scope="col" class="px-5 py-3">
                    description
                </th>
                <th scope="col" class="px-5 py-3">
                    price
                </th>
                <th scope="col" class="px-5 py-3">
                    actual
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
            @foreach($services as $service)
                <tr class="bg-white border-b hover:bg-gray-50 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <span class="view-mode">{{ $service->name }}</span>
                    </th>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ Str::limit($service->description, 15) }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ Str::limit($service->price, 25) }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ $service->actual }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('admin.services.edit',['service'=>$service->id])}}" class="view-mode edit-button font-medium text-blue-600  hover:underline">Edit</a>
                    </td>

                    <td class="px-6 py-4">
                        <form class="delete-form " action="{{route('admin.services.delete',['service'=>$service->id])}}" method="POST">
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


