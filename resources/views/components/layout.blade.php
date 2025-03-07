<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')

    {{-- Auto-hide flash message --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                let flash = document.getElementById("flash");
                if (flash) {
                    flash.style.opacity = "0";
                    setTimeout(() => flash.remove(), 500);
                }
            }, 3000);
        });
    </script>
</head>

<body class="bg-gray-100 text-gray-900">
    {{-- Flash Message --}}
    @if (session('success'))
        <div class="fixed top-5 left-1/2 transform -translate-x-1/2 w-3/4 sm:w-1/2 md:w-1/3">
            <p id="flash" class="bg-green-500 text-white text-center p-3 rounded-lg shadow-lg transition-opacity duration-500">
                {{ session('success') }}
            </p>
        </div>
    @endif

    {{-- Header --}}
    <header class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold">Ninjas Network</h1>
            <nav class="space-x-4">
                <a href="{{ route('ninjas.index') }}" class="hover:underline">All Ninjas</a>
                <a href="{{ route('ninjas.create') }}" class="hover:underline">Create New Ninja</a>
                <a href="{{ route('show.register') }}" class="hover:underline">Register</a>
                <a href="{{ route('show.login') }}" class="hover:underline">Login</a>
                <form action="" method="POST">
                    <button class="btn hover:underline">Logout</button>
                </form>
            </nav>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="container mx-auto mt-6 p-6 bg-white shadow-lg rounded-lg">
        {{ $slot }}
    </main>

</body>
</html>
