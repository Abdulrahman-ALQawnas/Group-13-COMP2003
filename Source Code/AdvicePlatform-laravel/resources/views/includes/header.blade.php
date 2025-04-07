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
          @auth('web')
            <!-- Notification Button -->
            @php
                $notifications = \App\Models\Notification::where('user_id', auth()->user()->getId())->where('read', 0)->orderBy('created_at')->get();
            @endphp
            <li class="relative">
              <button id="notificationBtn" class="relative align-middle focus:outline-none focus:shadow-outline-purple text-white bg-[#2B819F] w-[44px] h-[44px] rounded-full flex justify-center items-center">
                <span class="relative">
                  🔔
                  @if(count($notifications)>0)<span id="notificationCount" class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full">
                    {{count($notifications)}}
                  </span>@endif
                </span>
              </button>
              <!-- Notification Dropdown -->
              <div id="notificationDropdown" class="absolute right-0 mt-2 w-64 bg-white shadow-lg rounded-lg p-4 hidden">
                <div class="flex items-center justify-between mb-3">
                  <p class="font-bold text-gray-800">Notifications</p>
                  <!-- Toggle Switch -->
                  <label class="flex items-center cursor-pointer">
                    <input type="checkbox" id="notificationToggle" class="sr-only peer" checked />
                    <div class="w-10 h-5 bg-gray-300 rounded-full peer-checked:bg-blue-600 relative transition">
                      <div class="w-4 h-4 bg-white rounded-full absolute top-0.5 left-0.5 peer-checked:left-5 transition"></div>
                    </div>
                  </label>
                </div>

                <ul id="notificationList" class="mt-2 space-y-2">
                @foreach($notifications as $notification)
                  <li class="p-2 bg-gray-100 rounded-md">{{$notification->title}}</li>
                  @endforeach
                </ul>
              </div>
            </li>
            @endauth
            <li class="relative">
              <button class="relative align-middle focus:outline-none focus:shadow-outline-purple text-white bg-[#2B819F] w-[131px] h-[44px] rounded-full font-bold">
              @guest('web')
              <a href="{{route('login')}}"> Sign In</a>
              @endguest
              @auth('web')
              <a href="{{route('my_profile')}}">Profile</a>
              </button>
              <button class="relative align-middle focus:outline-none focus:shadow-outline-purple text-white bg-[#2B819F] w-[131px] h-[44px] rounded-full font-bold">
              <a href="#logout_form" onclick="event.preventDefault(); document.getElementById('logout_form').submit();">logout</a>
              <form method="POST" id="logout_form" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
              @endauth
              </button>
            </li>
           
          </ul>
        </div>
      </header>