<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method = "POST" action="/register">
        @csrf
       
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <label for="password_confirmation">Confirm your password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        
        <x-button type="submit">Press here</x-button>
    </form>
</x-layout>