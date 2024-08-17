<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method = "POST" action="/login" id='form'>
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" :value="old("name")" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <x-button type="password">Press here</x-button>
    </form>
    @error('name')
        <p class='text-red-500'>{{$message}}</p>
    @enderror
</x-layout>