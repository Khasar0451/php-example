<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method = "POST" action="/login">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" :value="old('name')">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        
        <x-button type="password">Press here</x-button>
    </form>
</x-layout>