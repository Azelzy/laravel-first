<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-300 text-center">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">Budi Santoso</td>
                    <td class="border px-4 py-2">budi@example.com</td>
                    <td class="border px-4 py-2">Jakarta</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Siti Aminah</td>
                    <td class="border px-4 py-2">siti@example.com</td>
                    <td class="border px-4 py-2">Bandung</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">Andi Prasetyo</td>
                    <td class="border px-4 py-2">andi@example.com</td>
                    <td class="border px-4 py-2">Surabaya</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">4</td>
                    <td class="border px-4 py-2">Dewi Lestari</td>
                    <td class="border px-4 py-2">dewi@example.com</td>
                    <td class="border px-4 py-2">Yogyakarta</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">5</td>
                    <td class="border px-4 py-2">Rizky Hidayat</td>
                    <td class="border px-4 py-2">rizky@example.com</td>
                    <td class="border px-4 py-2">Medan</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
