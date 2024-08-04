<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ship;
Route::get("/ship/add", function () {
    return view("ship.add");
});

Route::post("/ship/added", function () {
    Ship::create([
        "name"=> request('name'),
        'type' => request('type'),
        'dock_id' => 1,
    ]);
    return redirect ()->route('ship-list');
});
Route::get('/', function () {
    return view('home', [
        'ships' => Ship::all()
    ]);
})->name('ship-list');

Route::get('/ship/{id}', function ($id) {
    return view('ship',[
        'ship'=> Ship::find($id)
    ]);
});

