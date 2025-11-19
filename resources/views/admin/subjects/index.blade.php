<x-admin.layout>
    <x-slot:title>SUBJECTS CONTROL PANEL</x-slot:title>

    <div class="mb-4 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Subjects List</h2>
        <a href="/admin/subjects/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            +  Add Subject
        </a>
    </div>

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Subject Name</th>
                        <th scope="col" class="px-4 py-3">Description</th>
                        <th scope="col" class="px-4 py-3">Total Teachers</th>
                        <th scope="col" class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($subjects as $subject)
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-4 py-3 font-medium">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $subject->name }}</td>
                        <td class="px-4 py-3">{{ $subject->description ?? '-' }}</td>
                        <td class="px-4 py-3">{{ $subject->teachers_count }}</td>
                        <td class="px-4 py-3 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <a href="/admin/subjects/{{ $subject->id }}/edit" class="text-blue-600 dark:text-blue-400 hover:underline">Edit</a>
                                <form action="/admin/subjects/{{ $subject->id }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 dark:text-red-400 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-gray-500">No subjects found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>