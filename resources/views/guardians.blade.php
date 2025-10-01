<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="overflow-x-auto">
        <h1 class="text-2x1 font-bold mb-4">TABEL GUARDIAN:</h1>

        <table class="table-auto w-full border border-gray-300 text-center">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Pekerjaan</th>
                    <th class="border px-4 py-2">No. Telepon</th>
                    <th class="border px-4 py-2">E-mail</th>
                    <th class="border px-4 py-2">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guardians as $guardian)
                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100 transition">
                        <td class="px-6 py-4 font-medium text-gray-700">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $guardian->name }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $guardian->job }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $guardian->phone }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $guardian->email }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $guardian->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
