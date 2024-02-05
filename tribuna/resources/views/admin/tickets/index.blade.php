
@extends('layout.admin')

@section('title', 'Gallery page')

@section('content')

    <p class="font-bold mt-16 w-3/5 ml-10 mb-10 text-[#3B3B3B] text-[40px]">Історія купівлі білетів </p>

    <div class="relative overflow-x-auto bg-white text-[12px] mt-10  ml-10">


        <br>
        <table class= "text-left text-gray-500 ">
            <thead class=" text-gray-700 uppercase bg-white ">
            <tr>
                <th scope="col" class="px-5 py-3">
                    user_name
                </th>
                <th scope="col" class="px-5 py-3">
                    phone
                </th>
                <th scope="col" class="px-5 py-3">
                    mail
                </th>
                <th scope="col" class="px-5 py-3">
                    count
                </th>

                <th scope="col" class="px-5 py-3">
                    event
                </th>
                <th scope="col" class="px-5 py-3">
                    Date
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr class="bg-white border-b hover:bg-gray-50 ">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <span class="view-mode">{{ $ticket->user_name }}</span>
                    </th>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ $ticket->phone }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ $ticket->mail }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ $ticket->count }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ $ticket->event->name }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="view-mode">{{ $ticket->booking_date }}</span>
                    </td>

                </form>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
