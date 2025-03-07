@extends('layout.default')
@section('content')
      <div
        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300 mt-16"
      >
      <div class="flex items-center gap-4">
        <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('index')}}"> Home</a></p>  <strong class="text-[20px]"> > </strong>  <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('collages')}}"> Collages </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('specializations', $collage_id)}}"> Specializations </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[20px] font-medium text-[#728990]"><a href="{{route('courses', $specialization_id)}}"> Courses </a></p> <strong class="text-[20px]"> > </strong> <p class="text-[#2B819F] text-[22px] font-bold">  Computer Science </p>
         </div>


      </div>

    

      <div class="flex overflow-hidden flex-col pt-6 pb-20 bg-white" role="main">
       
        <div class="mt-2 w-full max-w-[1373px] max-md:max-w-full">
          <div class="flex gap-5 max-md:flex-col">
            <aside class="flex flex-col w-1/5 max-md:ml-0 max-md:w-full">
              <nav class="flex flex-col items-start pt-5 pr-11 pl-5 mx-auto w-full bg-zinc-50 pb-[621px] max-md:pr-5 max-md:pb-24 max-md:mt-5">
                <button class="flex gap-2.5 px-3 py-1.5 w-full bg-cyan-700 rounded-2xl focus:outline-none focus:ring-2 focus:ring-cyan-700 items-center" aria-current="page" tabindex="0">
                  <div class="flex justify-center items-center p-2 bg-cyan-700 rounded-xl">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/84c39f1a953fce3bf556628333ce4d7e182b02390290ef661c454553a7c1069a?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="" class="object-contain self-stretch my-auto aspect-[1.18] w-[26px]" />
                  </div>
                  <span class="grow shrink text-base font-medium text-white w-[124px]"><a href="{{route('single_course',$course_id)}}"> Reviews</a></span>
                </button>
                <button class="flex gap-2.5 px-3 py-1.5 w-full rounded-2xl focus:outline-none focus:ring-2 focus:ring-cyan-700 items-center" aria-current="page" tabindex="0">
                  <div class="flex justify-center items-center p-2 rounded-xl">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4c1d82cc409cf569c200511d1fa110db2aabf25311e481a82d04a11e6cbc3fd6?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="" class="object-contain self-stretch my-auto aspect-square w-[25px]" />
                  </div>
                  <span class="grow shrink text-base font-medium text-neutral-400 w-[124px]"><a href="{{route('advices', $course_id)}}"> Advice </a></span>
                </button>
               
              </nav>
            </aside>
            <main class="flex flex-col ml-5 w-4/5 max-md:ml-0 max-md:w-full">
              <div class="flex flex-col mt-1 w-full max-md:mt-6 max-md:max-w-full">
                <div class="flex gap-10 items-center self-end font-semibold">
                  <div class="flex flex-col self-stretch my-auto w-[135px]" role="status">
                    <h2 class="text-xl text-black">Total Reviews</h2>
                    <div class="mt-3 text-3xl text-center text-cyan-700">{{$reviews->count()}}</div>
                  </div>
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/39337c81f87c2d586d19d687f78047b107dd015e1a73779131f4b9bcfb1971cf?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="" class="object-contain shrink-0 self-stretch my-auto w-px aspect-[0.01]" />
                  <div class="flex flex-col self-stretch my-auto text-xl w-[174px]" role="status">
                    <h2 class="text-center text-black">Average Rating</h2>
                    <div class="flex gap-1.5 items-center mt-6 w-full text-cyan-700 whitespace-nowrap">
                      <span class="self-stretch my-auto">{{number_format($reviews->avg('rate'), 1)}}</span>
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/072cbcb205668fedc6c2631dc83b19c1d890bb02465bcb195fac22d328dc847d?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="4 out of 5 stars rating" class="object-contain shrink-0 self-stretch my-auto aspect-[5.71] w-[137px]" />
                    </div>
                  </div>
                </div>
                @foreach($reviews as $review)
                <article class="flex px-8 py-6 mt-16 w-full bg-emerald-50 rounded-xl max-md:px-5 max-md:mt-10 max-md:max-w-full">
                  <div class="flex flex-wrap flex-auto gap-10 items-center">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/df5c4d55f56fb2ba8c9160321e78a7b5f8b4157ee3e09433ccc6a045dbbad1ff?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="Profile picture of John" class="object-contain shrink-0 self-stretch my-auto rounded-full aspect-square w-[110px]" />
                    <div class="flex flex-col self-stretch my-auto min-w-[240px] w-[863px] max-md:max-w-full">
                      <div class="flex flex-col w-full font-semibold max-md:max-w-full">
                        <div class="flex flex-col w-full max-md:max-w-full">
                          <h3 class="text-2xl leading-none text-slate-500 max-md:max-w-full">{{$review->user()->first()->name}}</h3>
                          <p class="mt-2.5 text-xl text-cyan-700 max-md:max-w-full">{{$review->review}}</p>
                        </div>
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e61ab6b5d96a7c30fb56314570b7edfc69351a33f744d3907409e9abfaad4ac?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2" alt="5 out of 5 stars rating" class="object-contain mt-3.5 max-w-full aspect-[5.71] w-[137px]" />
                      </div>
                      <button class="mt-3.5 text-2xl font-medium leading-none text-slate-500 hover:text-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-700 w-[10%]" tabindex="0">Reply</button>
                    </div>
                  </div>
                  <time class="grow shrink self-start text-lg font-medium leading-none text-slate-500 w-[120px]">{{$review->created_at->format('H:i:s')}}</time>
                </article>
                @endforeach
                
              </div>
            </main>
          </div>
        </div>
      @endsection