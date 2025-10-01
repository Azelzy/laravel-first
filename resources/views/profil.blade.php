<x-layout>
  <x-slot:judul>{{$title}}</x-slot:judul>
  
  <div class="min-h-[60vh] flex items-center justify-center p-6">
    <div class="max-w-3xl w-full">
      <div class="bg-[#FF9013] px-6 py-3 mb-6 inline-block shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)]">
        <h3 class="text-2xl font-bold text-[#F5F1DC]">PROFIL SAYA</h3>
      </div>
      
      <div class="bg-white border-4 border-black p-8 shadow-[8px_8px_0px_0px_rgba(115,200,210,1)]">
        <div class="space-y-6">
          <!-- Nama -->
          <div class="border-l-4 border-[#FF9013] pl-4">
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Nama</p>
            <p class="text-xl font-bold text-gray-900 mt-1">{{ $nama ?? 'Azka El Fachrizy' }}</p>
          </div>
          
          <!-- Kelas -->
          <div class="border-l-4 border-[#73C8D2] pl-4">
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Kelas</p>
            <p class="text-xl font-bold text-gray-900 mt-1">{{ $kelas ?? 'XI PPLG 1' }}</p>
          </div>
          
          <!-- Sekolah -->
          <div class="border-l-4 border-[#FF9013] pl-4">
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Sekolah</p>
            <p class="text-xl font-bold text-gray-900 mt-1">{{ $sekolah ?? 'SMK RADEN UMAR SAID' }}</p>
          </div>
        </div>
        
        <div class="mt-8 pt-6 border-t-2 border-dashed border-gray-300">
          <div class="flex justify-center">
            <div class="bg-[#73C8D2] px-6 py-2 shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]">
              <span class="text-[#F5F1DC] font-semibold">STUDENT PROFILE</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>