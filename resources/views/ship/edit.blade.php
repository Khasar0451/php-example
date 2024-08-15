<x-layout>
    <x-slot:heading>
        New ship docked!
    </x-slot:heading>

    <form method = "POST" action="/ship/{{$ship['id']}}/update">
        @csrf
        <!-- form is sent as POST but will be treated as PATCH -->
        @method("PATCH") 
        <label for="type">Ship type:</label>
        <input type="text" name="type" id="type" value={{$ship['type']}}>
        <label for="name">Ship name:</label>
        <input type="text" name="name" id="name" value="{{$ship['name']}}">
        <label for="dock">Dock:</label>
        <input type="text" name="dock" id="dock" value={{$ship['dock']->name}}>
        {{-- <input name='dock_id' value={{$ship->dock_id}} hidden> --}}
        <button type="submit">Changing log</button>
    </form>
</x-layout>