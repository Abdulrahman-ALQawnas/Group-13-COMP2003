@extends('layout.default')
@section('content')
<div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16"
      >
     <div class="flex items-center gap-4">
    <p class="text-[20px] font-medium text-[#728990]"><a href="./index.html"> Home </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Chat </p>
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
          <article class="flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-emerald-50 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap gap-8 items-end">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0ae73942aa485b66668cc41bf21505b5d4a5534a849cf9721e8e8341dd37262c?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="John's profile picture" class="object-contain shrink-0 rounded-full aspect-square w-[80px]"/>
              <div class="flex flex-col min-w-[240px] w-[416px]">
                <div class="flex flex-col w-full font-semibold">
                  <h2 class="text-xl leading-none text-slate-500">John</h2>
                  <h3 class="mt-4 text-xl leading-none text-cyan-700">What is the best course for AI?</h3>
                </div>
                <button class="mt-5 text-2xl font-medium leading-none text-slate-500 text-left" aria-label="View answers to this question">AI is Artificial Intelligence</button>
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
                <button class="w-full px-4 py-2 text-left text-red-600 hover:bg-gray-100">Report</button>
              </div>
            </div>
          </article>
          <article class="flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-emerald-50 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap gap-8 items-end">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0ae73942aa485b66668cc41bf21505b5d4a5534a849cf9721e8e8341dd37262c?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="John's profile picture" class="object-contain shrink-0 rounded-full aspect-square w-[80px]"/>
              <div class="flex flex-col min-w-[240px] w-[416px]">
                <div class="flex flex-col w-full font-semibold">
                  <h2 class="text-xl leading-none text-slate-500">John</h2>
                  <h3 class="mt-4 text-xl leading-none text-cyan-700">What is the best course for AI?</h3>
                </div>
                <button class="mt-5 text-2xl font-medium leading-none text-slate-500 text-left" aria-label="View answers to this question">AI is Artificial Intelligence</button>
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
                <button class="w-full px-4 py-2 text-left text-red-600 hover:bg-gray-100">Report</button>
              </div>
            </div>
          </article>
          <article class="flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-emerald-50 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap gap-8 items-end">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0ae73942aa485b66668cc41bf21505b5d4a5534a849cf9721e8e8341dd37262c?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="John's profile picture" class="object-contain shrink-0 rounded-full aspect-square w-[80px]"/>
              <div class="flex flex-col min-w-[240px] w-[416px]">
                <div class="flex flex-col w-full font-semibold">
                  <h2 class="text-xl leading-none text-slate-500">John</h2>
                  <h3 class="mt-4 text-xl leading-none text-cyan-700">What is the best course for AI?</h3>
                </div>
                <button class="mt-5 text-2xl font-medium leading-none text-slate-500 text-left" aria-label="View answers to this question">AI is Artificial Intelligence</button>
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
                <button class="w-full px-4 py-2 text-left text-red-600 hover:bg-gray-100">Report</button>
              </div>
            </div>
          </article>

          <div class="flex flex-wrap gap-5 justify-between px-6 py-6 mt-16 w-full bg-gray-100 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full">
            <input type="text" id="question-input" placeholder="Ask a question..." class="flex-grow px-4 py-2 border rounded-lg outline-none">
            <label for="file-upload" class="cursor-pointer text-2xl">➕</label>
            <input type="file" id="file-upload" class="hidden">
            <button id="submit-question" class="px-4 py-2 bg-[#2B819F] text-white rounded-lg">Post</button>
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

        document.getElementById("submit-question").addEventListener("click", function() {
          const questionText = document.getElementById("question-input").value;
          if (questionText.trim() !== "") {
            alert("Question posted: " + questionText);
            document.getElementById("question-input").value = "";
          }
        });
      </script>
@endsection