<x-layout>

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Ninjas List</h2>

        <div class="space-y-4">
            @foreach ($ninjas as $ninja)
                <div class="flex justify-between items-center p-4 border border-gray-300 rounded-lg bg-gray-50">
                    <div>
                        <p class="text-lg font-semibold text-gray-700">Ninja Name: <span class="text-blue-500">{{ $ninja["name"] }}</span></p>
                    </div>
                    <a
                        href="{{ route('ninjas.show', $ninja['id']) }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300"
                    >
                        View Details
                    </a>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-6">
            {{ $ninjas->links('pagination::tailwind') }}
        </div>
    </div>

</x-layout>
