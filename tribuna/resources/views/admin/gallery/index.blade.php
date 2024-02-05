
@extends('layout.admin')

@section('title', 'Gallery page')

@section('content')

    <p class="w-4/5  m-auto text-start text-[48px] font-bold text-[#3B3B3B] mt-24 mb-14">ГАЛЕРЕЯ</p>



    <div class="grid grid-cols-3 gap-6 w-5/6 m-auto mb-24">

        <form class="flex flex-col items-center justify-center w-full" action="{{route('admin.gallery.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 ">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to upload</span> </p>
                    <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" name="photo_url" type="file" class="hidden" />
            </label>
            <button type="submit" class="mt-4 hover:underline">Додати</button>
        </form>

    @foreach($gallerys as $gallery)
            <div class="relative">
                <form class="delete-form absolute top-[-20px] right-0 text-[16px] " action="{{route('admin.gallery.delete',['gallery'=>$gallery->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button  font-medium text-red-600 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 90 90" >
                            <path class=" fill-black hover:fill-red-800" d="M21 12.0001C20.2324 12.0001 19.4639 12.2925 18.8789 12.879L12.8789 18.879C11.7059 20.052 11.7059 21.9512 12.8789 23.1212L34.7578 45.0001L12.8789 66.879C11.7059 68.052 11.7059 69.9512 12.8789 71.1212L18.8789 77.1212C20.0519 78.2942 21.9511 78.2942 23.1211 77.1212L45 55.2423L66.8789 77.1212C68.0489 78.2942 69.9511 78.2942 71.1211 77.1212L77.1211 71.1212C78.2941 69.9482 78.2941 68.049 77.1211 66.879L55.2422 45.0001L77.1211 23.1212C78.2941 21.9512 78.2941 20.049 77.1211 18.879L71.1211 12.879C69.9481 11.706 68.0489 11.706 66.8789 12.879L45 34.7579L23.1211 12.879C22.5346 12.2925 21.7676 12.0001 21 12.0001Z" fill="black"/>
                        </svg>
                    </button>
                </form>
                <img class="max-w-[300px] min-h-full rounded-lg" src="{{asset($gallery->photo_url)}}" alt="">
            </div>
        @endforeach

    </div>






@endsection
