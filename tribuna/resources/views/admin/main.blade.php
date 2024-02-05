@extends('layout.admin')

@section('title', 'Stylist page')

@section('content')




    <h1 class="font-medium text-white text-5xl">Events</h1>



    <div class="relative overflow-x-auto bg-white text-[10px]">


        <br>
        <table class= "text-left text-gray-500 ">
            <thead class=" text-gray-700 uppercase bg-white ">
            <tr>
                <th scope="col" class="px-5 py-3">
                    name
                </th>
                <th scope="col" class="px-5 py-3">
                    date_time
                </th>
                <th scope="col" class="px-5 py-3">
                    description
                </th>
                <th scope="col" class="px-5 py-3">
                    free_event
                </th>

                <th scope="col" class="px-5 py-3">
                    price
                </th>
                <th scope="col" class="px-5 py-3">
                     tickets
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
            @foreach($events as $event)
                <tr class="bg-white border-b hover:bg-gray-50 ">
                    <form class="update-form " action="" method="POST">
                        @csrf
                        @method('patch')
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <span class="view-mode">{{ $event->name }}</span>
                            <input type="date" class="edit-mode hidden p-1.5 pl-10 text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 " name="name" value="{{ $event->name }}">

                        </th>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $event->date_time }}</span>
                            <input type="date" class="edit-mode hidden p-1.5 pl-10  text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 " name="date_time" value="{{ $event->date_time }}">
                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ Str::limit($event->description, 15) }}</span>
                            <input type="date" class="edit-mode hidden p-1.5 pl-10text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 " name="description" value="{{ $event->description }}">

                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $event->free_event }}</span>
                            <input type="date" class="edit-mode hidden p-1.5 pl-10  text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 " name="free_event" value="{{ $event->free_event }}">

                        </td>

                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $event->price }}</span>
                            <input type="text" class="edit-mode hidden p-1.5 pl-10 text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 " name="price" value="{{ $event->price }}">
                        </td>
                        <td class="px-6 py-4">
                            <span class="view-mode">{{ $event->available_tickets }}</span>
                            <input type="text" class="edit-mode hidden p-1.5 pl-10  text-gray-900 border border-gray-300 rounded-lg w-40 bg-gray-50 " name="available_tickets" value="{{ $event->available_tickets }}">
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="view-mode edit-button font-medium text-blue-600  hover:underline">Edit</a>
                            <button type="submit" class="save-button hidden font-medium text-green-600 hover:underline">Save</button>

                        </td>

                    </form>
                    <td class="px-6 py-4">
                        <form class="delete-form " action="" method="POST">
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


