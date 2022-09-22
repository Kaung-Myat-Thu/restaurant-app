<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end p-2 m-2">
                <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">New Table</a>
            </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Guests
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Status
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Location
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                            <tr class="even:bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $table->name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $table->guest_number }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $table->status->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $table->location->name }}
                                </td>
                                <td class="py-4 px-6 text-right flex justify-center items-center gap-2">
                                    <a href="{{ route('admin.tables.edit', $table->id) }}" class="font-medium text-white bg-green-500 hover:bg-green-700 px-4 py-2 rounded">Edit</a>
                                    <form action="{{ route('admin.tables.destroy', $table->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="font-medium text-white bg-red-500 hover:bg-red-700 px-4 py-2 rounded" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
