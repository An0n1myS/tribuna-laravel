
@extends('layout.app')

@section('title', 'Event page')

@section('content')

    <div class="bg-[#CA0202] p-5">
        @include('partials.header')
    </div>
    <div class="" style=" background-image: url('/events_url/top.png'); background-repeat: no-repeat;">
        <br>
        <br>
        <p class="text-center text-white font-bold text-[64px]">ЗАХОДИ</p>
        <br>
        <br>
    </div>
    @if(session('success'))
        <div class="alert alert-success text-green-900 text-[24px] font-medium">
            {{ session('success') }}
        </div>
    @endif

    <div class="w-5/6 m-auto">
        <div class="w-full text-start mb-5">
            <p class="font-medium ml-8 text-[48px] mb-8 mt-24 text-[#3B3B3B]">СКОРО У <span class="text-[#CA0202]">TRIBUNA</span></p>
            <div class="flex flex-row justify-evenly font-medium">
                @foreach($limit_events as $event)
                    <div class="m-8 mt-0 mb-0 flex flex-col justify-end bg-gray-100">
                        <img src="{{asset($event->photo)}}" alt="" class=" max-w-[22rem]">
                        <p class="m-5 text-center"><a href="{{route('events.show', ['event' =>$event->id ])}}">{{$event->name}}</a></p>
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


    <div class="w-5/6 m-auto">
        <div class="w-full text-start mb-24">
            <p class="font-medium ml-8 text-[48px] mb-8 mt-24 text-[#3B3B3B]">АРХІВ</p>
            <div class="flex items-center justify-center mt-10 mb-10">
                <div class="custom-select">
                    <select id="selectSort" class="border-b-2 border-red-500 text-[24px] font-medium">
                        <option selected value="1">НАЙНОВІШІ</option>
                        <option value="2">НАЙСТАРІШІ</option>
                    </select>
                    <select id="selectType" class="border-b-2 border-red-500 text-[24px] font-medium ml-4">
                        <option selected value="1">ВСІ</option>
                        <option value="2">БЕЗКОШТОВНІ</option>
                        <option value="3">ПЛАТНІ</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 font-medium" id="events-container">
                <!-- тут буде виведено події через JavaScript -->
            </div>
        </div>

        <script>

            const selectSort = document.getElementById('selectSort');
            const selectType = document.getElementById('selectType');
            const eventsContainer = document.getElementById('events-container');

            function updateEvents() {
                const sortValue = selectSort.value;
                const typeValue = selectType.value;

                fetch(`/get-events?sort=${sortValue}&type=${typeValue}`)
                    .then(response => response.json())
                    .then(data => {
                        eventsContainer.innerHTML = '';

                        data.forEach(event => {
                            const eventElement = document.createElement('div');
                            eventElement.classList.add('m-8', 'mt-0', 'mb-0', 'flex', 'flex-col', 'justify-end', 'bg-gray-100');

                            const eventDate = new Date(event.date_time);
                            const formattedDate = `${eventDate.getDate().toString().padStart(2, '0')}.${(eventDate.getMonth() + 1).toString().padStart(2, '0')}.${eventDate.getFullYear()}`;
                            const formattedTime = `${eventDate.getHours().toString().padStart(2, '0')}:${eventDate.getMinutes().toString().padStart(2, '0')}`;


                            eventElement.innerHTML = `
                    <img src="${event.photo}" alt="" class="max-w-[22rem]">
                    <p class="m-5 text-center"><a href="/events/${event.id}">${event.name}</a></p>
                    <br>
                    <div class="flex flex-row justify-around pb-4">
                        <p>${formattedDate}</p>
                        <p>${formattedTime}</p>
                        ${event.free_event ? '<p>Free</p>' : `<p>${event.price} грн.</p>`}
                    </div>
                `;
                            eventsContainer.appendChild(eventElement);
                        });
                    })
                    .catch(error => console.error('Error fetching events:', error));
            }

            // Вызываем функцию при загрузке страницы и при изменении значений селектов
            document.addEventListener('DOMContentLoaded', updateEvents);
            selectSort.addEventListener('change', updateEvents);
            selectType.addEventListener('change', updateEvents);

        </script>

    </div>


@endsection
