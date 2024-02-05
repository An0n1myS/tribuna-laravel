
@extends('layout.admin')

@section('title', 'Gallery page')

@section('content')

    <p class="w-4/5  text-start text-[48px] font-bold text-[#3B3B3B] ml-10 mt-24 mb-14">Відгуки</p>

    <div class="grid grid-cols-1 gap-8  w-5/6" id="comments-container">

        @foreach($reviews as $review)
            <div class="relative bg-gray-100 p-10 flex flex-col justify-between text-[#646464]">
                <div class="flex flex-row justify-between w-full mb-4">
                    <p class="font-bold">{{$review->name}}</p>
                    <p>{{$review->category->title}}</p>
                </div>
                <p class="mb-4">{{$review->content}}</p>

                <p>{{$review->created_at}}</p>
                <form class="delete-form absolute top-3 right-3 text-[16px] " action="{{route('admin.reviews.delete',['comment'=>$review->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button  font-medium text-red-600 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 90 90" >
                            <path class=" fill-black hover:fill-red-800" d="M21 12.0001C20.2324 12.0001 19.4639 12.2925 18.8789 12.879L12.8789 18.879C11.7059 20.052 11.7059 21.9512 12.8789 23.1212L34.7578 45.0001L12.8789 66.879C11.7059 68.052 11.7059 69.9512 12.8789 71.1212L18.8789 77.1212C20.0519 78.2942 21.9511 78.2942 23.1211 77.1212L45 55.2423L66.8789 77.1212C68.0489 78.2942 69.9511 78.2942 71.1211 77.1212L77.1211 71.1212C78.2941 69.9482 78.2941 68.049 77.1211 66.879L55.2422 45.0001L77.1211 23.1212C78.2941 21.9512 78.2941 20.049 77.1211 18.879L71.1211 12.879C69.9481 11.706 68.0489 11.706 66.8789 12.879L45 34.7579L23.1211 12.879C22.5346 12.2925 21.7676 12.0001 21 12.0001Z" fill="black"/>
                        </svg>
                    </button>
                </form>
            </div>
        @endforeach

    </div>







@endsection
