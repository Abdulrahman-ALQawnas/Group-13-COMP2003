@extends('layout.default')
@section('content')

      <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16">
        <div class="flex items-center gap-4">
            <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Colleges </p>
        </div>
      </div>
      <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                <form class="search" method="GET" action="{{route('CollageSearch')}}">
                  @csrf
                <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border border-gray-200 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" name="search" placeholder="Search Colleges" aria-label="Search"/>
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg class="w-4 h-4" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 17L13.2223 13.2156M15.3158 8.15789C15.3158 10.0563 14.5617 11.8769 13.2193 13.2193C11.8769 14.5617 10.0563 15.3158 8.15789 15.3158C6.2595 15.3158 4.43886 14.5617 3.0965 13.2193C1.75413 11.8769 1 10.0563 1 8.15789C1 6.2595 1.75413 4.43886 3.0965 3.0965C4.43886 1.75413 6.2595 1 8.15789 1C10.0563 1 11.8769 1.75413 13.2193 3.0965C14.5617 4.43886 15.3158 6.2595 15.3158 8.15789V8.15789Z" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
              </form>
              </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">
        @if($collages->count() == 0)
        <div class="...">
          <h2 class="mt-5 text-center">No Colleges Found . . . </h2>

        </div>
        @else
        @foreach($collages as $collage)
        <div class="...">
          <div class="flex flex-col pb-9 rounded-xl border border-solid border-cyan-700 border-opacity-40" style="background-color:{{$collage->bgColor}}">
            <img loading="lazy" src="{{$collage->image}}" alt="Engineering and Mathematics illustration" class="object-contain self-end max-w-full aspect-[1.54] w-[248px]" />
            <div class="flex flex-col pr-8 pl-4 mt-5 max-md:pr-5">
              <h2 class="text-2xl font-semibold text-white"><a href="{{route('specializations', $collage->id)}}">{{$collage->name}}</a></h2>
            </div>
          </div>

        </div>
        @endforeach
</div>
        <div class="mt-5 d-flex justify-content-center">
            {!! $collages->links() !!}
        </div>
        @endif
      @endsection