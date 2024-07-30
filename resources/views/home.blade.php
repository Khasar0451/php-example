<x-layout>
    <x-slot:heading>
        Dockyard  
    </x-slot:heading>

    @foreach ($ships as $ship)
        <a href="ship/{{$ship['id']}}" class="text-blue-900 hover:underline">
            <li>{{$ship['type']}} in {{$ship['dock']}} </li>
        </a>
    @endforeach

</x-layout>