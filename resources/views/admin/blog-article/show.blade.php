<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Blog Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">{{ $blogKonten->title }}</h3>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600"><strong>Category:</strong> {{ $blogKonten->kategori->nama_kategori ?? 'N/A' }}</p>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600"><strong>Content:</strong></p>
                        <div class="prose max-w-none">{{ $blogKonten->konten }}</div>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600"><strong>Created At:</strong> {{ $blogKonten->created_at }}</p>
                        <p class="text-sm text-gray-600"><strong>Updated At:</strong> {{ $blogKonten->updated_at }}</p>
                        <p class="text-sm text-gray-600"><strong>Created By:</strong> {{ $blogKonten->created_by ?? 'N/A' }}</p>
                        <p class="text-sm text-gray-600"><strong>Updated By:</strong> {{ $blogKonten->updated_by ?? 'N/A' }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('admin.blog-article.edit', $blogKonten->id_blog_content) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Edit
                        </a>
                        <a href="{{ route('admin.blog-article.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>