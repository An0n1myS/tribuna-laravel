@extends('layout.admin')

@section('title', 'Gallery page')

@section('content')

        <p class="font-bold mt-16 w-3/5 ml-10 mb-10 text-[#3B3B3B] text-[40px]">Бронювання</p>

    <div class="relative overflow-x-auto bg-white text-[12px] mt-10  ml-10">
        <br>
        <table class= "text-left text-gray-500 ">
            <thead class=" text-gray-700 uppercase bg-white ">
            <tr>
                <th scope="col" class="px-5 py-3">
                    User Name
                </th>
                <th scope="col" class="px-5 py-3">
                    Service
                </th>

                <th scope="col" class="px-5 py-3">
                    Phone
                </th>
                <th scope="col" class="px-5 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-5 py-3">
                    Time Slot
                </th>
                <th scope="col" class="px-5 py-3">
                    Tubing
                </th>
                <th scope="col" class="px-5 py-3">
                    Delete
                </th>

            </tr>
            </thead>
            <tbody>
            @foreach($tableTubing_datas as $booking)
                <tr class="bg-white border-b hover:bg-gray-50 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <span>{{ $booking->user_name }}</span>
                    </th>
                    <td class="px-6 py-4">
                        <span>{{ $booking->service->name }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->phone }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->quantity }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->timeSlot->slot }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->tubingType->title }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <form class="delete-form " action="{{route('admin.booking_t.delete',['booking'=>$booking->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button  font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <table class= "text-left text-gray-500 ">
            <thead class=" text-gray-700 uppercase bg-white ">
            <tr>
                <th scope="col" class="px-5 py-3">
                    User Name
                </th>
                <th scope="col" class="px-5 py-3">
                    Service
                </th>

                <th scope="col" class="px-5 py-3">
                    Phone
                </th>
                <th scope="col" class="px-5 py-3">
                    Quantity
                </th>
                <th scope="col" class="px-5 py-3">
                    Time Slot
                </th>
                <th scope="col" class="px-5 py-3">
                    Skate
                </th>
                <th scope="col" class="px-5 py-3">
                    Delete
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($tableSkating_datas as $booking)
                <tr class="bg-white border-b hover:bg-gray-50 ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <span>{{ $booking->user_name }}</span>
                    </th>
                    <td class="px-6 py-4">
                        <span>{{ $booking->service->name }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->phone }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->quantity }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->timeSlot->slot }}</span>
                    </td>

                    <td class="px-6 py-4">
                        <span>{{ $booking->skatingList->size }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <form class="delete-form " action="{{route('admin.booking_s.delete',['booking'=>$booking->id])}}" method="POST">
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

