<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="flex p-2 m-2">
                <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Go Back</a>
            </div>

            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="lg:w-1/2 xl:pl-4 px-4 py-2">
                    <form action="{{ route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Name</label>
                            <input name="name" type="text" class="block w-full appearance-none bg-white rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-500 @enderror">
                            @error('name')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Image</label>
                            <input name="image" type="file" class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('image') border-red-500 @enderror">
                            @error('image')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Price</label>
                            <input name="price" type="number" class="block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('price') border-red-500 @enderror">
                            @error('price')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Description</label>
                            <textarea name="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm rounded-md @error('description') border-red-500 @enderror"></textarea>
                            @error('description')
                                <div class="text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 mt-1">
                            <label class="block text-sm font-medium text-gray-700 my-1">Categories</label>
                            <select multiple name="categories[]" class=" form-multiselect block w-full appearance-none bg-white py-2 px-3 rounded-md text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
