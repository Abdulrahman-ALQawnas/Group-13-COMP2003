<header class="w-full py-4 bg-white dark:bg-gray-800">
        <div
          class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
        >
         <a href="{{route('index')}}">
        <img src="{{asset('assets/plymouth-logo.png')}}" width="200" alt=""> </a>
          <!-- Mobile hamburger -->
          <button
            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu"
            aria-label="Menu"
          >
            <svg
              class="w-6 h-6"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
          <!-- Search input -->
        
          <ul class="flex items-center flex-shrink-0 space-x-6">

            
           
            
             
            </li>
            <li class="relative">
              <button
                class="relative align-middle focus:outline-none focus:shadow-outline-purple text-white bg-[#2B819F] w-[131px] h-[44px] rounded-full font-bold"
               
              >
              @guest('web')
              <a href="{{route('login')}}"> Sign In</a>
              @endguest
              @auth('web')
              <a href="/pages/profile.html">Profile</a>
              </button>
              <button
                class="relative align-middle focus:outline-none focus:shadow-outline-purple text-white bg-[#2B819F] w-[131px] h-[44px] rounded-full font-bold"

              >
              <a href="{{route('logout')}}">logout</a>
              @endauth
              </button>
             
            </li>
           
          </ul>
        </div>
      </header>