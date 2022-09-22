<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="flex p-2 m-2">
                <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Go Back</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="lg:w-1/2 xl:pl-4 px-4 py-2">
                    <form method="POST" action="{{ route('admin.tables.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Name</label>
                            <input name="name" type="text" class="block w-full appearance-none bg-white rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-500 @enderror">
                            @error('name')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Guest Number</label>
                            <input name="guest_number" type="number" class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-500 @enderror">
                            @error('guest_number')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Status</label>
                            <select name="status" class=" form-multiselect block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach (App\Enums\TableStatus::cases() as $status)
                                    <option value="{{ $status->value }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Location</label>
                            <select name="location" class=" form-multiselect block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach (App\Enums\TableLocation::cases() as $location)
                                    <option value="{{ $location->value }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <input type="submit" value="Submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
