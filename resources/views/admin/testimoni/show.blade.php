<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Testimoni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">{{ $testimoni->title }}</h3>
                    </div>
                    <div class="mb-4">
                        <img src="{{ asset('storage/images/' . $testimoni->image) }}" alt="{{ $testimoni->title }}" class="mt-4" style="height: 200px;">
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-sm text-gray-600"><strong>Content:</strong></p>
                        <div class="tinymce-viewer">{!! $testimoni->konten !!}</div>
                    </div>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600"><strong>Created At:</strong> {{ $testimoni->created_at }}</p>
                        <p class="text-sm text-gray-600"><strong>Updated At:</strong> {{ $testimoni->updated_at }}</p>
                        <p class="text-sm text-gray-600"><strong>Created By:</strong> {{ $testimoni->created_by ?? 'N/A' }}</p>
                        <p class="text-sm text-gray-600"><strong>Updated By:</strong> {{ $testimoni->updated_by ?? 'N/A' }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('admin.testimoni.edit', $testimoni->id_blog_testimoni) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Edit
                        </a>
                        <a href="{{ route('admin.testimoni.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<script src="https://cdn.tiny.cloud/1/825datvr58prncihsagponmuxfgatq69r0aojbg7qqi2865e/tinymce/8/tinymce.min.js" referrerpolicy="origin"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    tinymce.init({
        selector: '.tinymce-viewer',
        menubar: false,
        toolbar: false,
        statusbar: false,
        readonly: true,
        skin: 'oxide',
        content_css: 'default',
        height: 400,
        branding: false,
        plugins: 'autolink lists link image media table code codesample',
        setup: function (editor) {
            editor.on('init', function () {
                editor.getBody().setAttribute('contenteditable', false);
            });
        }
    });
});
</script>