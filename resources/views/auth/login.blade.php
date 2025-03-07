<x-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Log in to Your Account</h2>

        @if (session('error'))
            <p class="bg-red-500 text-white text-center p-2 rounded mb-4">{{ session('error') }}</p>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Email --}}
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email:</label>
                <input
                    type="email" id="email" name="email" value="{{ old('email') }}" required
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

            {{-- Remember Me --}}
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember" class="mr-2">
                <label for="remember" class="text-gray-700">Remember Me</label>
            </div>

            {{-- Submit Button --}}
            <div class="text-center">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 w-full"
                >
                    Login
                </button>
            </div>

            {{-- Forgot Password --}}
            <div class="text-center mt-2">
                <a href="{{ route('password.request') }}" class="text-blue-500 hover:underline text-sm">
                    Forgot your password?
                </a>
            </div>
        </form>
        @if ($errors->any())
        <ul class="bg-red-100 p-2 m-1">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>

        @endif
    </div>
</x-layout>
