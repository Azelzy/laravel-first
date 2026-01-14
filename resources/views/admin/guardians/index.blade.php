<x-admin.layout>
    <x-slot:title>PARENTS CONTROL PANEL</x-slot:title>

    <div class="mb-4 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Guardians List</h2>
        <a href="/admin/guardians/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            + Add Guardian
        </a>
    </div>

    <div class="mb-6">
        <form method="GET" action="/admin/guardians" class="flex gap-2">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search by name, email, or phone..." class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Search
            </button>
            @if($search)
                <a href="/admin/guardians" class="text-gray-900 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">Clear</a>
            @endif
        </form>
    </div>

    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">No</th>
                        <th scope="col" class="px-4 py-3">Name</th>
                        <th scope="col" class="px-4 py-3">Job</th>
                        <th scope="col" class="px-4 py-3">Phone</th>
                        <th scope="col" class="px-4 py-3">Email</th>
                        <th scope="col" class="px-4 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($guardians as $guardian)
                    <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-4 py-3 font-medium">{{ ($guardians->currentPage() - 1) * 5 + $loop->iteration }}</td>
                        <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">{{ $guardian->name }}</td>
                        <td class="px-4 py-3">{{ $guardian->job }}</td>
                        <td class="px-4 py-3">{{ $guardian->phone }}</td>
                        <td class="px-4 py-3">{{ $guardian->email }}</td>
                        <td class="px-4 py-3 text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <a href="/admin/guardians/{{ $guardian->id }}/edit" class="text-blue-600 dark:text-blue-400 hover:underline">Edit</a>
                                <form action="/admin/guardians/{{ $guardian->id }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 dark:text-red-400 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-gray-500">No guardians found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if($guardians->hasPages())
        <div class="mt-6">
            {{ $guardians->links() }}
        </div>
    @endif
</x-admin.layout>