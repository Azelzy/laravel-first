<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="container mx-auto p-6">
        <div class="bg-[#FF9013] px-6 py-3 mb-6 inline-block shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)]">
            <h1 class="text-2xl font-bold text-[#F5F1DC]">SUBJECT</h1>
        </div>
        <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(115,200,210,1)] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="bg-[#F5F1DC] border-b-4 border-black">
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">No
                            </th>
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">Name
                            </th>
                            <th class="border-r-2 border-black px-4 py-4 text-sm font-bold text-gray-900 uppercase">
                                Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr class="border-b-2 border-gray-300 hover:bg-[#F5F1DC] transition-colors">
                                <td class="px-6 py-4 font-bold text-gray-900 text-center border-r-2 border-gray-300">
                                    {{ $loop->iteration }}</td>
                                <td class="px-6 py-4 font-semibold text-gray-900 border-r-2 border-gray-300">
                                    {{ $subject->name }}</td>
                                <td class="px-6 py-4 text-gray-700 border-r-2 border-gray-300">
                                    {{ $subject->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-6 flex justify-end">
            <div class="bg-[#73C8D2] px-5 py-2 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]">
                <span class="text-[#000000] font-semibold text-sm">Total Subjects: {{ count($subjects) }}</span>
            </div>
        </div>
    </div>
</x-layout>
