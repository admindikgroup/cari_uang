<div class="mb-4">
    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
    <input type="text" name="title" id="title" value="{{ old('title', $title ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
</div>
<div class="mb-4">
    <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
    <textarea name="subtitle" id="subtitle" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('subtitle', $subtitle ?? '') }}</textarea>
</div>
<input type="hidden" name="page_kategori" value="{{ $manage_page->page_kategori ?? '1' }}">
