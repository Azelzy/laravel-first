<div>
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        
        <!-- kiri -->
        <div class="flex items-center">
          <!-- Logo -->
          <div class="shrink-0">
            <img class="h-8 w-8"
                 src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                 alt="Your Company">
          </div>
          <!-- Menu -->
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="{{ route('home') }}"
                 class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                 Dashboard
              </a>
              <a href="{{ route('kontak') }}"
                 class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                 Contact
              </a>
              <a href="{{ route('profil') }}"
                 class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                 Profile
              </a>
            </div>
          </div>
        </div>

        <!-- kanan -->
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <!-- Tombol notifikasi -->
            <button type="button"
                    class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon: Bell -->
              <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.5"
                   viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14.25 18.75a1.5 1.5 0 01-3 0m6-6v-2.25a6 6 0 10-12 0V12l-1.5 3h15L18 12z" />
              </svg>
            </button>

            <!-- Foto profil -->
            <div class="relative ml-3">
              <div>
                <button type="button"
                        class="flex rounded-full bg-gray-800 text-sm focus:outline-none"
                        id="user-menu-button">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full"
                       src="https://avatars.githubusercontent.com/u/107330423?v=4"
                       alt="">
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </nav>
</div>