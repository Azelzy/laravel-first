<div>
  <nav class="bg-[#F5F1DC] border-b-4 border-[#FF9013] shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">

        <!-- kiri -->
        <div class="flex items-center">
          <!-- Logo -->
          <div class="shrink-0">
            
          </div>
          <!-- Menu -->
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-2">
              <x-nav-link href="/home" :active="request()->is('home')">
                HOME
              </x-nav-link>

              <x-nav-link href="/profil" :active="request()->is('profil')">
                PROFILE
              </x-nav-link>

              <x-nav-link href="/kontak" :active="request()->is('kontak')">
                CONTACT
              </x-nav-link>

              <x-nav-link href="/student" :active="request()->is('student')">
                STUDENTS
              </x-nav-link>

              <x-nav-link href="/guardians" :active="request()->is('guardians')">
                PARENTS
              </x-nav-link>

              <x-nav-link href="/classroom" :active="request()->is('classroom')">
                CLASSROOMS
              </x-nav-link>

              <x-nav-link href="/teachers" :active="request()->is('teachers')">
                TEACHERS
              </x-nav-link>

              <x-nav-link href="/subjects" :active="request()->is('subjects')">
                SUBJECTS
              </x-nav-link>
              
            </div>
          </div>
        </div>

        <!-- kanan -->
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6 space-x-3">
            @guest
              <!-- Button Login untuk user yang belum login -->
              <a href="/login" class="bg-[#FF9013] text-[#F5F1DC] border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)] hover:shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)] px-4 py-2 text-sm font-bold uppercase transition-all hover:translate-x-0.5 hover:translate-y-0.5">
                LOGIN
              </a>
            @endguest

            @auth
              <!-- User Dropdown untuk user yang sudah login -->
              <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center space-x-2 bg-white border-2 border-black px-4 py-2 shadow-[2px_2px_0px_0px_rgba(0,0,0,0.25)] hover:shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)] transition-all">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="font-bold text-sm">{{ Auth::user()->name }}</span>
                  <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-48 bg-white border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)] z-50">
                  <div class="py-1">
                    <a href="/dashboard" class="block px-4 py-2 text-sm font-semibold text-gray-900 hover:bg-[#F5F1DC] border-b border-gray-200">
                      Dashboard
                    </a>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="w-full text-left px-4 py-2 text-sm font-semibold text-red-600 hover:bg-[#F5F1DC]">
                        Logout
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            @endauth
          </div>
        </div>

      </div>
    </div>
  </nav>
</div>