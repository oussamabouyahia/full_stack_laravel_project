<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja network</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if (session('success'))
<div >
 <p id="flash" class="bg-green-100 text-center text-green-500 p-4 font-bold">

     {{ session('success') }}
</p>
</div>
    @endif
    <header>
<h1 class="text-center">Ninjas Network</h1>
        <nav>
            <a href='{{ route('ninjas.index') }}'>All ninjas</a>
            <a href='{{ route('ninjas.create') }}' >Create new Ninja</a>
        </nav>
    </header>
<main class="container">
{{ $slot }}
</main>

</body>
</html>
