<x-layout>
    <x-slot:heading>
        Dockyard  
    </x-slot:heading>

    @foreach ($ships as $ship)
        <a href="ship/{{$ship['id']}}/show" class="text-blue-900 hover:underline">
            <li>{{$ship['type']}} named {{$ship['name']}} </li>
        </a>
    @endforeach

</x-layout>