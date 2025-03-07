@extends('layout.default')
@section('content')

      <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16">
        <div class="flex items-center gap-4">
            <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('collages')}}"> Collages </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Specializations </p>
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">
        @foreach($specializations as $specialization)
        <div class="...">
          <div class="flex flex-col pb-9 @if($loop->iteration %2 == 0) bg-teal-400
                                        @elseif($loop->iteration %2 == 1) bg-sky-700
                                       @endif
          rounded-xl border border-solid border-cyan-700 border-opacity-40">
            <img loading="lazy" src="{{$specialization->image}}" alt="Engineering and Mathematics illustration" class="object-contain self-end max-w-full aspect-[1.54] w-[248px]" />
            <div class="flex flex-col pr-8 pl-4 mt-5 max-md:pr-5">
              <h2 class="text-2xl font-semibold text-white"><a href="{{route('courses', $specialization->id)}}">{{$specialization->name}}</a></h2>
            </div>
          </div>

        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {!! $specializations->links() !!}
        </div>
      @endsection