<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method = "POST" action="/register">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
        <button type="submit">Press here</button>
    </form>
</x-layout>