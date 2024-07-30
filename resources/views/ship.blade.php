<x-layout>
    <x-slot:heading>
        {{ $ship['name'] }}
    </x-slot:heading>
   <li> Class: {{ $ship['type'] }}</li>
   <li> Docked in {{ $ship['dock'] }}</li>
</x-layout>