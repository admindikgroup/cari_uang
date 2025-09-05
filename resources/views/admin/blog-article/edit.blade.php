<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="mb-4">
                            <div class="font-medium text-red-600">Whoops! Something went wrong.</div>

                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.blog-article.update', $blogKonten->id_blog_content) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $blogKonten->title) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="id_kategori" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                            <select name="id_kategori" id="id_kategori" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">Select a Category</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id_kategori }}" {{ old('id_kategori', $blogKonten->id_kategori) == $kategori->id_kategori ? 'selected' : '' }}>{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="konten" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                            <textarea name="konten" id="konten" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('konten', $blogKonten->konten) }}</textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update
                            </button>
                            <a href="{{ route('admin.blog-article.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>