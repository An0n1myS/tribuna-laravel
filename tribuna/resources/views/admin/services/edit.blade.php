@extends('layout.admin')

@section('title', 'Stylist page')

@section('content')




    <p class="font-bold mt-8 w-3/5 ml-10 mb-10 text-[#3B3B3B] text-[40px]">Редагувати послугу </p>

    <div class="relative overflow-x-auto bg-white text-[12px] mt-8  ml-10 ">

        <form action="{{route('admin.services.update',['service'=>$service->id])}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-24 flex flex-row ">
                <img class=" max-h-[300px]" src="{{asset($service->photo)}}" alt="">
                <div class="ml-16 w-3/5">
                    <div class="mb-4">
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Заголовок послуги</label>
                        <input value="{{$service->name}}" placeholder="{{$service->name}}" type="text" id="first_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5 " required>
                    </div>
                    <br>
                    <div class="mb-4">

                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Опис послуги</label>
                        <textarea id="message" rows="4"  name="description"   class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Напишіть опис тут">{{$service->description}}</textarea>

                    </div>
                    <br>
                    <div class="mb-4">
                        <label for="ticket_price" class="block mb-2 text-sm font-medium text-gray-900">Ціна </label>
                        <input type="text" id="ticket_price" value="{{$service->price}}" placeholder="{{$service->price}}" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:ring-blue-500 focus:border-blue-500 block p-2.5" >
                    </div>
                    @if($service->actual ==1)
                        <div class="flex flex-row w-3/5">
                            <div class="flex items-center mb-4">
                                <input checked id="free-entry" type="radio" value="1" name="entry-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="free-entry" class="ms-2 text-sm font-medium text-gray-900">Актуально зараз</label>
                            </div>

                            <div class="flex items-center mb-4 ml-4">
                                <input  id="paid-entry" type="radio" value="0" name="entry-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="paid-entry" class="ms-2 text-sm font-medium text-gray-900">Не актуально зараз</label>
                            </div>
                        </div>
                    @else
                        <div class="flex flex-row w-3/5">
                            <div class="flex items-center mb-4">
                                <input  id="free-entry" type="radio" value="1" name="entry-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="free-entry" class="ms-2 text-sm font-medium text-gray-900">Актуально зараз</label>
                            </div>

                            <div class="flex items-center mb-4 ml-4">
                                <input checked id="paid-entry" type="radio" value="0" name="entry-type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                <label for="paid-entry" class="ms-2 text-sm font-medium text-gray-900">Не актуально зараз</label>
                            </div>
                        </div>
                    @endif


                    <div class=" mb-4">

                        <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Загрузити фото</label>
                        <input name="photo_url" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none " id="file_input" type="file">
                        <input type="hidden" name="photo_url_hidden" value="{{$service->photo}}">
                    </div>
                </div>

            </div>

            <div class="mb-4 w-3/6  flex flex-row justify-evenly">
                <button type="submit"  class="p-10  pt-3 pb-3 bg-[#CA0202] rounded-lg text-white text-[16px] font-bold hover:underline">Зберегти</button>

                <a href="{{route('admin.services.index')}}" class="p-10 pt-3 pb-3 rounded-lg text-black text-[16px] font-bold hover:underline">Відмінити</a>

            </div>
        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#free-entry').change(function () {
                $('#ticket_price, #ticket_quantity').prop('disabled', true).val('');
                $('#ticket_options').hide();
            });

            $('#paid-entry').change(function () {
                $('#ticket_price, #ticket_quantity').prop('disabled', false);
                $('#ticket_options').show();
            });
        });
    </script>
@endsection


