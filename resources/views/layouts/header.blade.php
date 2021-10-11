
  <section id="header" class="bg-white px-6 z-10">
    <div class="flex h-auto my-1">
      <div class="my-auto">
        <a class="cursor-pointer" href="{{ url('/') }}">
          <img class="h-10 md:h-12" src="./images/logo.png" alt />
        </a> 
      </div>
      <div class="flex-grow text-right my-auto">
        <div class="hidden md:inline-block">
          <a class="px-3" href="{{ url('/') }}">Home</a>
          @if( auth()->check() )
          <a class="px-3" href="{{ url('/dashboard') }}">Dashboard</a>
          @endif

          @if(!auth()->check())
          <a class="px-3" href="{{ url('/register') }}">Register</a>
          <div class="inline-flex py-2">
            <a class="btn btn-primary leading-5" href="{{ url('login') }}">Login</a>
          </div>
          @endif
        </div>
      </div>

      @if( auth()->check() )
      <div class="ml-4 flex items-center md:ml-6">
        <button
          class="p-1 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:shadow-outline focus:text-gray-500"
          aria-label="Notifications"
        >
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
            />
          </svg>
        </button>

        <!-- Profile dropdown -->
        <div class="ml-3 relative"  x-data="{ openProfileMenu: false }">
          <div>
            <button
            @click="openProfileMenu = true"
              class="inline-flex items-center justify-center h-10 w-10 rounded-full bg-gray-300 mr-2"
            >
              <span class="text-sm font-bold leading-none text-black">{{ substr(auth()->user()->name, 0, 1) }}</span>
            </button>
          </div>

          <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg z-10"
        x-show="openProfileMenu"
        @click.away="openProfileMenu = false">
            <div class="py-1 rounded-md bg-white shadow-xs">
              <a
              href="{{ url('logout') }}" 
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150"
              >Logout</a>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </section>