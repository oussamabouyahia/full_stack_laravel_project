<x-layout>
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Create Ninja</h2>

        <form action="{{ route('ninjas.store') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Ninja Name --}}
            <div>
                <label for="name" class="block text-gray-700 font-medium">Ninja Name:</label>
                <input
                    id="name"
                    name="name"
                    type="text"
                    value="{{ old('name') }}"
                    required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            {{-- Ninja Skill --}}
            <div>
                <label for="skill" class="block text-gray-700 font-medium">Ninja Skill (0-100):</label>
                <input
                    id="skill"
                    name="skill"
                    type="number"
                    value="{{ old("skill") }}"
                    required
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            {{-- Biography --}}
            <div>
                <label for="bio" class="block text-gray-700 font-medium">Biography:</label>
                <textarea
                    rows="5"
                    id="bio"
                    name="bio"
                    required
                    id="bio"
                    name="bio"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >{{ old('bio') }}</textarea>
            </div>

            {{-- Dojo Selection --}}

            <div>
                <label for="dojo_id" class="block text-gray-700 font-medium">Select a Dojo:</label>
                <select
                    id="dojo_id"
                    name="dojo_id"
                    required

                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
                    <option value="" disabled selected>Select a dojo</option>
                    @foreach ($dojos as $dojo)
                        <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id')?'selected':'' }}>{{ $dojo->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Submit Button --}}
            <div class="text-right">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300"
                >
                    Create Ninja
                </button>
            </div>
        </form>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-500 bg-reds-100"> {{ $error }}</li>
            @endforeach
        </ul>

        @endif
    </div>
</x-layout>
