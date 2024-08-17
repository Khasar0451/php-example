<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ship;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
// Route::get("/ship/add", [ShipController::class,"create"])   ;
    //return view("ship.add");
    

Route::post("/ship/store", function () {
    Ship::create([
        "name"=> request('name'),
        'type' => request('type'),
        'dock_id' => 1,
    ]);
    return redirect ('/ship');
});



//Route::resource("ship", ShipController::class);

Route::get('/', [ShipController::class,'list']);
// Route::get('/ship', [ShipController::class,'list']); --- its not the same, 

Route::get('/ship/create', [ShipController::class,'create']);
Route::get('/ship/{ship}/show', [ShipController::class,'show']);

Route::get('/ship/{ship}/edit', [ShipController::class,'edit']);
Route::patch('/ship/{ship}/update', [ShipController::class,'update']);

Route::delete('/ship/{ship}/delete', [ShipController::class,'destroy']);
Route::get('/ship/create', [ShipController::class,'create']);
Route::post('/ship/store', [ShipController::class,'store']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
