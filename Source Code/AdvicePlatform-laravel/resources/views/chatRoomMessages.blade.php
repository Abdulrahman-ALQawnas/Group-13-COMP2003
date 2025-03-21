@extends('layout.default')
@section('content')
<div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16"
      >
     <div class="flex items-center gap-4">
    <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold"><a href="{{route('chatrooms')}}">  Chat Rooms </a> </p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Chat </p>
     </div>

     <div class="relative w-full max-w-xl mt-4 mr-6 focus-within:text-purple-500">
                <form class="search" method="GET" action="{{route('chatroomMessagesSearch',$chatroom_id)}}">
                  @csrf
                <input class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border border-gray-200 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" name="search" placeholder="Search in Messages" aria-label="Search"/>
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg class="w-4 h-4" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 17L13.2223 13.2156M15.3158 8.15789C15.3158 10.0563 14.5617 11.8769 13.2193 13.2193C11.8769 14.5617 10.0563 15.3158 8.15789 15.3158C6.2595 15.3158 4.43886 14.5617 3.0965 13.2193C1.75413 11.8769 1 10.0563 1 8.15789C1 6.2595 1.75413 4.43886 3.0965 3.0965C4.43886 1.75413 6.2595 1 8.15789 1C10.0563 1 11.8769 1.75413 13.2193 3.0965C14.5617 4.43886 15.3158 6.2595 15.3158 8.15789V8.15789Z" stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
              </form>
              </div>
      </div>

      <div class="flex overflow-hidden flex-col px-14 pt-6 pb-44 bg-white max-md:px-5 max-md:pb-24">
        <main class="w-[1300px]">
          @foreach($chats as $chat)
          <article class="flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-emerald-50 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap gap-8 items-end">
              <img loading="lazy" src="{{$chat->user->image}}" alt="John's profile picture" class="object-contain shrink-0 rounded-full aspect-square w-[80px]"/>
              <div class="flex flex-col min-w-[240px] w-[416px]">
                <div class="flex flex-col w-full font-semibold">
                  <h2 class="text-xl leading-none text-slate-500">{{$chat->user->name}}</h2>
                  <h3 class="mt-4 text-xl leading-none text-cyan-700">{{$chat->message}}</h3>
                </div>
               </div>
            </div>
            <div class="relative flex items-center gap-4">
              <button class="like-button text-gray-400 text-2xl focus:outline-none" aria-label="Like this question">
                👍🏻
              </button>
              <button class="menu-button text-gray-400 text-2xl focus:outline-none" aria-label="More options">
                &#x22EE;
              </button>
              <div class="dropdown-menu hidden absolute right-2 mt-2 w-32 bg-white border border-gray-200 rounded-lg shadow-lg">
                <button class="w-full px-4 py-2 text-left text-red-600 hover:bg-gray-100" onclick="window.location.href='{{ route('report', $chat->user->id) }}'">Report</button>
              </div>
            </div>
          </article>
          @endforeach

          <div class="flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-gray-100 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full">
          <form action="{{route('create_message')}}" method="POST" enctype="multipart/form-data">  
          @csrf
          <input type="text" name="message" id="question-input" placeholder="Ask a question..." class="flex-grow px-4 py-2 border rounded-lg outline-none">
            <label for="file-upload" class="cursor-pointer text-2xl">➕</label>
            <input type="file" id="file-upload" class="hidden">
            <input type="hidden" name="type" value="1">
            <input type="hidden" name="chatroom_id" value="{{$chatroom_id}}">
            <button type="submit" id="submit-question" class="px-4 py-2 bg-[#2B819F] text-white rounded-lg">Post</button>
          </form>
          </div>
        </main>
      </div>
      @endsection
      @section('scripts')
      <script>
        document.querySelectorAll(".like-button").forEach(button => {
          button.addEventListener("click", function() {
            const isLiked = this.getAttribute("data-liked") === "true";
            this.innerHTML = isLiked ? "👍🏻" : "👍🏽";
            this.setAttribute("data-liked", !isLiked);
            this.classList.toggle("text-blue-500");
            this.classList.toggle("font-bold");
          });
        });

        document.querySelectorAll(".menu-button").forEach(button => {
          button.addEventListener("click", function() {
            this.nextElementSibling.classList.toggle("hidden");
          });
        });
      </script>
@endsection
     