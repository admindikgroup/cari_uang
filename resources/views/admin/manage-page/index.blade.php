<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Page Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4 flex justify-between items-center">
                        <a href="{{ route('admin.manage-page.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            + Create New Page
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="w-1/5 px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Judul
                                    </th>
                                    <th class="w-2/5 px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Sub Judul
                                    </th>
                                    <th class="w-1/6 px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th class="w-1/6 px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($pageMasters as $pageMaster)
                                    @php $konten = json_decode($pageMaster->konten, true); @endphp
                                    <tr>
                                        <!-- Judul -->
                                        <td class="px-3 py-4 text-sm text-gray-900 truncate max-w-[200px]" title="{{ $konten['title'] ?? '-' }}">
                                            {{ Str::limit($konten['title'] ?? '-', 50) }}
                                        </td>

                                        <!-- Sub Judul -->
                                        <td class="px-3 py-4 text-sm text-gray-900 truncate max-w-[300px]" title="{{ $konten['subtitle'] ?? '-' }}">
                                            {{ Str::limit($konten['subtitle'] ?? '-', 70) }}
                                        </td>

                                        <!-- Status -->
                                        <td class="px-3 py-4 whitespace-nowrap text-sm">
                                            @if ($pageMaster->status_active == 1)
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Active
                                                </span>
                                            @else
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                    Non-Active
                                                </span>
                                            @endif
                                        </td>

                                        <!-- Actions -->
                                        <td class="px-3 py-4 whitespace-nowrap text-sm">
                                                <a href="{{ route('admin.manage-page.edit', $pageMaster->id_master_page) }}"
                                                    class="text-indigo-600 hover:text-indigo-900 font-semibold">
                                                    Edit
                                                </a>

                                                <form action="{{ route('admin.manage-page.destroy', $pageMaster->id_master_page) }}"
                                                      method="POST" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">
                                                        Delete
                                                    </button>
                                                </form>

                                                @if ($pageMaster->status_active == 0)
                                                    <form action="{{ route('admin.manage-page.activate', $pageMaster->id_master_page) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                            class="text-blue-600 hover:text-red-800 font-semibold">
                                                            Activate
                                                        </button>
                                                    </form>
                                                @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if ($pageMasters->isEmpty())
                        <p class="text-gray-500 text-center py-6">No page content available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
