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
                Home
              </x-nav-link>

              <x-nav-link href="/profil" :active="request()->is('profil')">
                Profil
              </x-nav-link>

              <x-nav-link href="/kontak" :active="request()->is('kontak')">
                Kontak
              </x-nav-link>

              <x-nav-link href="/student" :active="request()->is('student')">
                Student
              </x-nav-link>

              <x-nav-link href="/guardians" :active="request()->is('guardians')">
                Guardians
              </x-nav-link>

              <x-nav-link href="/classroom" :active="request()->is('classroom')">
                Classroom
              </x-nav-link>
            </div>
          </div>
        </div>

        <!-- kanan -->
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6 space-x-3">
        


          
          </div>
        </div>

      </div>
    </div>
  </nav>
</div>