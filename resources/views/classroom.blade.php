<x-layout>
    <x-slot:judul>
        {{ $title }}
    </x-slot:judul>

    <div class="container mx-auto p-6">
        <div class="bg-[#FF9013] px-6 py-3 mb-6 inline-block shadow-[4px_4px_0px_0px_rgba(0,0,0,0.25)]">
            <h1 class="text-2xl font-bold text-[#F5F1DC]">CLASSROOMS</h1>
        </div>


        <div class="bg-white border-4 border-black shadow-[8px_8px_0px_0px_rgba(115,200,210,1)] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse border-2 border-black">
                    <thead>
                        <tr class="bg-[#F5F1DC] border-b-2 border-black">
                            <th scope="col"
                                class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider border-r-2 border-black">
                                ID</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider border-r-2 border-black">
                                Name</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-sm font-bold text-gray-900 uppercase tracking-wider">
                                Student list</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($classrooms as $classroom)
                            <tr
                                class="odd:bg-white even:bg-gray-100 border-b-2 border-black hover:bg-[#F5F1DC] transition-colors">
                                <td class="px-6 py-4 font-bold text-gray-900 border-r-2 border-black">
                                    {{ $classroom->id }}
                                </td>
                                <td class="px-6 py-4 text-gray-700 border-r-2 border-black">
                                    {{ $classroom->name }}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    @if ($classroom->students->isEmpty())
                                        <span class="text-gray-500 italic">No students</span>
                                    @else
                                        <ul class="list-disc list-inside">
                                            @foreach ($classroom->students as $student)
                                                <li>{{ $student->name }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3"
                                    class="px-6 py-4 text-center text-gray-500 italic border-t-2 border-black">
                                    No classrooms available
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-6 flex justify-end">
            <div class="bg-[#73C8D2] px-5 py-2 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]">
                <span class="text-[#000000] font-semibold text-sm">Total Classrooms: {{ count($classrooms) }}</span>
            </div>
        </div>
    </div>

</x-layout>
