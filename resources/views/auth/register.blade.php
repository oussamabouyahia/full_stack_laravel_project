<x-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Register for an Account</h2>

        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Name --}}
            <div>
                <label for="name" class="block text-gray-700 font-medium">Name:</label>
                <input
                    type="text" id="name" name="name" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email:</label>
                <input
                    type="email" id="email" name="email" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label for="password" class="block text-gray-700 font-medium">Password:</label>
                <input
                    type="password" id="password" name="password" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <label for="password_confirmation" class="block text-gray-700 font-medium">Confirm Password:</label>
                <input
                    type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                >
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 w-full"
                >
                    Register
                </button>
            </div>
        </form>
    </div>
</x-layout>
