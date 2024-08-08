<x-layout>
    <x-slot:heading>
        {{ $ship['name'] }}
    </x-slot:heading>
   <li> Class: {{ $ship['type'] }}</li>
   <li> Docked in {{ $ship['dock']->name }}</li>
   <a href='/ship/{{$ship['id']}}/delete'>Delete</a>
   <a href='/ship/{{$ship['id']}}/edit'>Edit</a>
</x-layout>