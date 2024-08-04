<x-layout>
    <x-slot:heading>
        New ship docked!
    </x-slot:heading>

    <form method = "POST" action="/ship/added">
        @csrf
        <label for="type">Ship type:</label>
        <input type="text" name="type" id="type" placeholder="Escort">
        <label for="name">Ship name:</label>
        <input type="text" name="name" id="name" placeholder="Escort">
        <label for="dock">Dock:</label>
        <input type="text" name="dock" id="dock" placeholder="Escort">
        <button type="submit">Permission to dock granted!</button>
    </form>
</x-layout>