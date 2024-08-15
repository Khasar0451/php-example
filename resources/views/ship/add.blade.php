<x-layout>
    <x-slot:heading>
        New ship docked!
    </x-slot:heading>

    <form method = "POST" action="/ship">
        @csrf
        <label for="type">Ship type:</label>
        <input type="text" name="type" id="type" placeholder="Warship">
        <label for="name">Ship name:</label>
        <input type="text" name="name" id="name" placeholder="The Vengeful Spirit">
        <label for="dock">Dock:</label>
        <input type="text" name="dock" id="dock" placeholder="A1">
        <button type="submit">Permission to dock granted!</button>
    </form>
</x-layout>