<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Broadcast Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin.broadcast-telegram.update', $broadcastTelegram) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" name="title" id="title" value="{{ $broadcastTelegram->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>
                        <div class="mb-4">
                            <label for="konten_broadcast" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                            <textarea name="konten_broadcast" id="konten_broadcast" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $broadcastTelegram->konten_broadcast }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="expired" class="block text-gray-700 text-sm font-bold mb-2">Expired Date & Time:</label>
                            <input type="datetime-local" name="expired" id="expired"
                                value="{{ old('expired', date('Y-m-d\TH:i', strtotime($broadcastTelegram->expired))) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update
                            </button>
                            <a href="{{ route('admin.broadcast-telegram.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.tiny.cloud/1/825datvr58prncihsagponmuxfgatq69r0aojbg7qqi2865e/tinymce/8/tinymce.min.js" 
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea#konten_broadcast',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
    @endpush
</x-admin-layout>