@extends('layout.default')
@section('content')
<div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16"
      >
     <div class="flex items-center gap-4">
    <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold"><a href="{{route('chatrooms')}}">  Chat Rooms </a> </p>
     </div>

     <div class="flex flex-wrap gap-5 justify-between px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 mt-4 max-md:max-w-full">
      <select id="theme" name="theme" class="grow bg-transparent border-none outline-none">
        <option value="light">Sort by</option>
        <option value="light">Newest</option>
        <option value="dark">Most Likes</option>
      </select>
    </div>
      </div>
      <div class="relative w-full max-w-xl mt-4 mr-6 focus-within:text-purple-500">
                <form class="search" method="GET" action="{{route('chatroomsSearch')}}">
                  @csrf
                <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border border-gray-200 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" name="search" placeholder="Search in ChatRooms" aria-label="Search"/>
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg class="w-4 h-4" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 17L13.2223 13.2156M15.3158 8.15789C15.3158 10.0563 14.5617 11.8769 13.2193 13.2193C11.8769 14.5617 10.0563 15.3158 8.15789 15.3158C6.2595 15.3158 4.43886 14.5617 3.0965 13.2193C1.75413 11.8769 1 10.0563 1 8.15789C1 6.2595 1.75413 4.43886 3.0965 3.0965C4.43886 1.75413 6.2595 1 8.15789 1C10.0563 1 11.8769 1.75413 13.2193 3.0965C14.5617 4.43886 15.3158 6.2595 15.3158 8.15789V8.15789Z" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
              </form>
              </div>
      <div class="flex overflow-hidden flex-col px-14 pt-6 pb-44 bg-white max-md:px-5 max-md:pb-24 mt-5">
        <main class="w-[1300px]">
          @foreach($chatrooms as $chatroom)
          <article class="cursor-pointer flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-emerald-50 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full" onclick= "window.location.href='{{ route('chatroom_message', $chatroom->id) }}'">
            <div class="flex flex-wrap gap-8 items-end">
              <img loading="lazy" src="{{$chatroom->course->image}}" alt="John's profile picture" class="object-contain shrink-0 rounded-full aspect-square w-[80px]"/>
              <div class="flex flex-col min-w-[240px] w-[416px]">
                <div class="flex flex-col w-full font-semibold">
                  <h2 class="text-xl leading-none text-cyan-700 font-bold">{{$chatroom->course->name . '_ chatroom'}}</h2>
                  <p class="mt-4 text-2xl leading-none text-slate-500">{{$chatroom->latest_message}}</p>
                </div>
                <button class="mt-5 text-xl font-medium leading-none text-slate-500 text-left" aria-label="View answers to this question">View Messages</button>
              </div>
            </div>
          </article>
          @endforeach
          @if($chatrooms->count() == 0)
          <p class="text-red-500 text-center">there no result related ...</p>
          @endif
        </main>
      </div>
      @endsection
      