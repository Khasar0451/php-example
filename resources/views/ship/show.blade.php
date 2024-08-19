<x-layout>
    <x-slot:heading>
        {{ $ship['name'] }}
    </x-slot:heading>
    <li> Class: {{ $ship['type'] }}</li>
    <li> Docked in {{ $ship['dock']->name }}</li>
    @auth
        <form method = "POST" action="/ship/{{ $ship['id'] }}/delete">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href='/ship/{{ $ship['id'] }}/edit'>Edit</a>
    @endauth
    <p></p>
</x-layout>
