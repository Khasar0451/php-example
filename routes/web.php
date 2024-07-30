<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ship;
Route::get('/', function () {
    return view('home', [
        'ships' => Ship::all()
    ]);
});

Route::get('/ship/{id}', function ($id) {
    return view('ship',[
        'ship'=> Ship::find($id)
    ]);
});
