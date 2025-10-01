<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="container mx-auto p-6">
        <div class="bg-[#73C8D2] px-6 py-3 mb-6 inline-block shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)]">
            <h1 class="text-2xl font-bold text-[#F5F1DC]">TABEL GUARDIAN</h1>
        </div>

        <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(255,144,19,1)] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-[#F5F1DC] border-b-4 border-black">
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">No</th>
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">Nama</th>
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">Pekerjaan</th>
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">No. Telepon</th>
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">E-mail</th>
                            <th class="px-4 py-4 text-sm font-bold text-gray-900 uppercase">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guardians as $guardian)
                            <tr class="border-b-2 border-gray-300 hover:bg-[#F5F1DC] transition-colors">
                                <td class="px-6 py-4 font-bold text-gray-900 text-center border-r-2 border-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 font-semibold text-gray-900 border-r-2 border-gray-300">{{ $guardian->name }}</td>
                                <td class="px-6 py-4 text-gray-700 border-r-2 border-gray-300">{{ $guardian->job }}</td>
                                <td class="px-6 py-4 text-gray-700 border-r-2 border-gray-300">{{ $guardian->phone }}</td>
                                <td class="px-6 py-4 text-gray-700 border-r-2 border-gray-300">{{ $guardian->email }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $guardian->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mt-6 flex justify-end">
            <div class="bg-[#FF9013] px-5 py-2 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]">
                <span class="text-[#F5F1DC] font-semibold text-sm">Total Guardians: {{ count($guardians) }}</span>
            </div>
        </div>
    </div>
</x-layout>