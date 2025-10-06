<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FAQs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <a href="{{ route('admin.faq.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Create New Our Services
                        </a>
                    </div>
                    {{-- Added min-w-full and table-auto for better responsiveness and column sizing --}}
                    <table class="min-w-full divide-y divide-gray-200 table-auto">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-10">
                                    No
                                </th>
                                {{-- Added w-1/4 to help with column sizing --}}
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">
                                    Our Services
                                </th>
                                {{-- Added w-2/4 to help with column sizing --}}
                                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-2/4">
                                    Description
                                </th>
                                <th scope="col" class="px-3 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($faqs as $index => $faq)
                                <tr>
                                    {{-- Removed px-6 py-4 to be consistent with <th>'s smaller padding --}}
                                    <td class="px-3 py-3">
                                        <div class="text-sm text-gray-900">{{ $index + 1}}</div>
                                    </td>
                                    {{-- REMOVED whitespace-nowrap and used px-3 py-3 --}}
                                    <td class="px-3 py-3">
                                        <div class="text-sm text-gray-900">{{ $faq->question }}</div>
                                    </td>
                                    {{-- REMOVED whitespace-nowrap and used px-3 py-3 --}}
                                    <td class="px-3 py-3">
                                        <div class="text-sm text-gray-900">{{ $faq->answer }}</div>
                                    </td>
                                    {{-- Added flex and space-x-2 to make buttons fit better and wrapped with a <div> --}}
                                    <td class="px-3 py-3 text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-2">
                                            <a href="{{ route('admin.faq.show', $faq->id) }}" class="text-green-600 hover:text-green-900">View</a>
                                            <a href="{{ route('admin.faq.edit', $faq->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$faqs->links()}}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>