<x-layout>

    <h2>Ninjas </h2>
    <ul>
        @foreach ($ninjas as $ninja)

        <li>
            <a href="{{ route("ninjas.show",$ninja['id']) }}">

               ninja name:  {{$ninja["name"]  }}
        </a>

    </li>
    @endforeach

    </ul>
    {{ $ninjas->links() }}
</x-layout>

