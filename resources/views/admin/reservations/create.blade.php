<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="flex p-2 m-2">
                <a href="{{ route('admin.reservations.index') }}"
                    class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Go Back</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="lg:w-1/2 xl:pl-4 px-4 py-2">
                    <form method="POST" action="{{ route('admin.reservations.store') }}">
                        @csrf
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">First Name</label>
                            <input value="{{ old('first_name') }}" name="first_name" type="text"
                                class="block w-full appearance-none bg-white rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-500 @enderror">
                            @error('first_name')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input value="{{ old('last_name') }}" name="last_name" type="text"
                                class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-500 @enderror">
                            @error('last_name')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <input value="{{ old('email') }}" name="email" type="email"
                                class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror">
                            @error('email')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Ph Number</label>
                            <input value="{{ old('ph_number') }}" name="ph_number" type="number"
                                class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('ph_number') border-red-500 @enderror">
                            @error('ph_number')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Reservation Date</label>
                            <input value="{{ old('res_date') }}" name="res_date" type="datetime-local"
                                class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-500 @enderror">
                            @error('res_date')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Guest Number</label>
                            <input value="{{ old('guest_number') }}" name="guest_number" type="number"
                                class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-500 @enderror">
                            @error('guest_number')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Table</label>
                            <select name="table_id"
                                class=" form-multiselect block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach ($tables as $table)
                                    <option value="{{ $table->id }}">
                                        {{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4">
                            <input type="submit" value="Submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
