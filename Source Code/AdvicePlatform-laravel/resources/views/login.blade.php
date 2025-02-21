@extends('layout.default')
@section('content')
<!-- Background Image -->
      <div class="absolute bottom-0 right-8 mr-[10.5rem] z-0">
        <img src="{{asset('assets/img/school-students.png')}}" alt="">
      </div>

      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg dark:bg-gray-800 mt-8 z-10"
      >
      <h1 class="text-center text-[34px] font-semibold text-[#2B819F]">Plymouth University Guide Website</h1>
      
        <div class="flex flex-col rounded-none max-w-[585px]">
          <div
            class="flex flex-col justify-center px-11 py-20 w-full bg-emerald-50 rounded-[30px] max-md:px-5 max-md:max-w-full"
          >
            <div class="flex flex-col max-md:max-w-full">
              <div
                class="flex flex-col self-center px-9 pb-3 max-w-full text-center rounded-none w-[343px] max-md:px-5"
              >
                <h1 class="self-center text-3xl font-semibold text-black">
                  Welcome Back
                </h1>
                <p class="mt-2.5 text-base font-medium text-black text-opacity-60">
                  Sign In to Your Account
                </p>
              </div>
              <form class="flex flex-col mt-8 w-full max-md:max-w-full" action="{{route('signin')}}" method="post">
                @csrf
                <div class="flex flex-col w-full max-md:max-w-full">
                  <div
                    class="flex flex-col w-full text-lg font-medium text-neutral-400 max-md:max-w-full"
                  >
                    <div
                      class="flex flex-col w-full whitespace-nowrap rounded-xl max-md:max-w-full"
                    >
                      <label for="email" class="sr-only">Email</label>
                      <input
                        type="email"
                        id="email"
                        name="email"
                        class="px-4 py-7 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 max-md:pr-5 max-md:max-w-full"
                        placeholder="Email"
                        required
                        aria-required="true"
                      />
                    </div>
                    <div
                      class="flex flex-col mt-4 w-full whitespace-nowrap rounded-none max-md:max-w-full"
                    >
                      <label for="password" class="sr-only">Password</label>
                      <div
                        class="flex flex-wrap gap-5 justify-between px-4 py-6 bg-white rounded-xl border border-solid border-neutral-400 border-opacity-30 max-md:max-w-full"
                      >
                        <input
                          type="password"
                          id="password"
                          name="password"
                          class="grow bg-transparent border-none outline-none"
                          placeholder="Password"
                          required
                          aria-required="true"
                        />
                        <img
                          loading="lazy"
                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/2f5a0c318914c31e82782679f2ec7e97b4362eeb8bc6951f3a90bb104b7da971?placeholderIfAbsent=true&apiKey=211755799c724fe59f655beb2610b2c2"
                          class="object-contain shrink-0 my-auto w-6 aspect-[1.33]"
                          alt=""
                          role="presentation"
                        />
                      </div>
                    </div>
                   
                  </div>
                  <button
                    type="submit"
                    class="mt-7 w-full px-4 py-5 text-2xl font-semibold text-white bg-cyan-700 rounded-xl max-md:px-5"
                  >
                  <a href="{{route('login')}}"> Sign In</a>
                   
                  </button>
                </div>
                <div class="flex gap-1 mt-5 max-w-full rounded-lg w-[296px]">
                  <p class="grow my-auto text-lg leading-none text-black">
                    Don't Have an account?
                  </p>
                  <a
                    href="{{route('register')}}"
                    class="gap-3 self-stretch px-0.5 py-1 text-xl font-semibold leading-none text-cyan-700 rounded-lg min-h-[28px]"
                  >
                    Sign up
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
   @endsection