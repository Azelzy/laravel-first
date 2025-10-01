<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Classrooms</h1>
        <div class="bg-white shadow-md rounded p-4">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($classrooms as $classroom)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $classroom->id }}</td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">{{ $classroom->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>