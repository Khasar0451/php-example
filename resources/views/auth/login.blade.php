<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method = "POST" action="/login">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
        {{-- <button type="submit">Press here</button> --}}
        <x-button type="password">Press here</x-button>
    </form>
</x-layout>