<x-layout>
<div class="m-6 p-3 justify-center background-color-grey-light border-3">

    <h1>ninja id - {{ $ninja->id }}</h1>
    <h1>ninja name - {{ $ninja->name }}</h1>
    <h1>my skill - {{ $ninja->skill }}</h1>
    <h1 class="background-color-blue-light">About me</h1>
    <p>{{ $ninja->bio }}</p>
</div>
<div class="m-6 p-3 justify-center background-color-green-light border-3">
    <h1> Related Dojo</h1>
    <h3>{{ $ninja->dojo->name }}</h3>
    <p>{{ $ninja->dojo->description }}</p>

</div>
<form action="{{ route('ninjas.destroy',$ninja->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn my-4">Delete this ninja</button>
</form>
</x-layout>

