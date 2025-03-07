@extends('layout.default')
@section('content')
      <div
        class="h-full overflow-hidden bg-white rounded-lg dark:bg-gray-800 mt-8"
      >
     <div class="bg-[#2B819F] flex justify-between h-[205px] w-[1307px] items-center">
      <div class="text-white text-[28px] font-semibold ml-8">Your gateway to insights and advice at <br> Plymouth University.</div>
      <div><img src="{{asset('assets/img/student-study.png')}}" width="250" alt=""></div>
     </div>
      </div>

      <div class="flex flex-wrap gap-10 items-center mt-16">
        <div
          class="flex flex-col self-stretch my-auto rounded-none min-w-[240px] w-[387px]"
          tabindex="0"
          role="region"
          aria-label="Courses feature section"
        >
          <div
            class="flex flex-col justify-center px-5 py-6 rounded-xl border border-solid bg-emerald-50 bg-opacity-80 border-cyan-700 border-opacity-40"
          >
            <div class="flex flex-col min-h-[139px]">
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/e038d72b01cc4e0dbf843aa7c2220d864af10e2014dfc589bc17d7e3f09fad7e?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2"
                class="object-contain aspect-square w-[62px]"
                alt="Courses icon representing educational content"
              />
              <div class="flex flex-col mt-3 w-full">
                <div class="text-2xl font-semibold text-cyan-700"><a href="{{route('collages')}}"> Collages</a></div>
                <div class="mt-1.5 text-base font-medium text-slate-500">
                  Explore reviews and details for all courses.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="flex flex-col self-stretch my-auto rounded-none min-w-[240px] w-[387px]"
          tabindex="0"
          role="region"
          aria-label="Chat feature section"
        >
          <div
            class="flex flex-col justify-center px-5 py-7 rounded-xl border border-solid bg-emerald-50 bg-opacity-80 border-cyan-700 border-opacity-40"
          >
            <div class="flex flex-col min-h-[133px]">
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/94f5e94189c07ded94dbc6f60f5496a373860428a02f5c47486c94295a9c764d?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2"
                class="object-contain aspect-square w-[62px]"
                alt="Chat icon representing communication features"
              />
              <div class="flex flex-col mt-3 w-full">
                <div class="text-2xl font-semibold text-cyan-700"><a href="{{route('chat')}}"> Chat</a></div>
                <div class="mt-1.5 text-base font-medium text-slate-500">
                  Explore reviews and details for all courses.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="flex flex-col self-stretch my-auto rounded-none min-w-[240px] w-[387px]"
          tabindex="0"
          role="region"
          aria-label="Map feature section"
        >
          <div
            class="flex flex-col justify-center px-5 py-8 rounded-xl border border-solid bg-emerald-50 bg-opacity-80 border-cyan-700 border-opacity-40"
          >
            <div class="flex flex-col min-h-[124px]">
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c6a4ca8932646443d54b11dc1d73c78aa3feb9fb64047649c9de7dc812b0b6cf?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2"
                class="object-contain aspect-square w-[62px]"
                alt="Map icon representing location features"
              />
              <div class="flex flex-col mt-2 w-full">
                <div class="text-2xl font-semibold text-cyan-700"><a href="{{route('map')}}"> Map </a></div>
                <div class="mt-1.5 text-base font-medium text-slate-500">
                  Explore reviews and details for all courses.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection