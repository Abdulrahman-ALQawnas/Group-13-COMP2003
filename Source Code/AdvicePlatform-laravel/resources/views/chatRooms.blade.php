@extends('layout.default')
@section('content')
<div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16"
      >
     <div class="flex items-center gap-4">
    <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Chat Rooms </p>
     </div>

     <div class="flex flex-wrap gap-5 justify-between px-4 py-4 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 mt-4 max-md:max-w-full">
      <select id="theme" name="theme" class="grow bg-transparent border-none outline-none">
        <option value="light">Sort by</option>
        <option value="light">Newest</option>
        <option value="dark">Most Likes</option>
      </select>
    </div>
      </div>

      <div class="flex overflow-hidden flex-col px-14 pt-6 pb-44 bg-white max-md:px-5 max-md:pb-24">
        <main class="w-[1300px]">
          @foreach($chatrooms as $chatroom)
          <article class="flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-emerald-50 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full" onclick= "window.location.href='{{ route('chatroom_message', $chatroom->id) }}'">
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
        </main>
      </div>
      @endsection
      