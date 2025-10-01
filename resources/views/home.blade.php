<x-layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    
    <div class="min-h-[60vh] flex items-center justify-center">
        <div class="text-center">
            <div class="inline-block bg-[#FF9013] px-8 py-3 mb-6 shadow-[6px_6px_0px_0px_rgba(0,0,0,0.25)]">
                <h3 class="text-3xl font-bold text-[#F5F1DC]">HALAMAN HOME</h3>
            </div>
            
            <div class="bg-white border-4 border-black p-8 max-w-2xl mx-auto shadow-[8px_8px_0px_0px_rgba(115,200,210,1)]">
                <p class="text-xl text-gray-800 leading-relaxed">
                    Selamat datang di halaman utama website ini.
                </p>
                
                <div class="mt-8 flex justify-center space-x-4">
                    <div class="bg-[#73C8D2] px-6 py-3 shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)] hover:translate-x-1 hover:translate-y-1 hover:shadow-[2px_2px_0px_0px_rgba(0,0,0,0.25)] transition-all cursor-pointer">
                        <span class="text-[#F5F1DC] font-semibold">EXPLORE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>