<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Blog Video') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin.blog-video.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="id_kategori" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                            <select name="id_kategori" id="id_kategori" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id_kategori }}">{{ $category->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="video_url" class="block text-gray-700 text-sm font-bold mb-2">Video URL:</label>
                            <input type="url" name="video_url" id="video_url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="alt_text" class="block text-gray-700 text-sm font-bold mb-2">Alt Text:</label>
                            <textarea name="alt_text" id="alt_text" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Create
                            </button>
                            <a href="{{ route('admin.blog-video.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
