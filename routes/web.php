<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ship;
use App\Http\Controllers\ShipController;

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
Route::get('/ship', [ShipController::class,'list']);

Route::get('/ship/create', [ShipController::class,'create']);
Route::get('/ship/{ship}/show', [ShipController::class,'show']);

Route::get('/ship/{ship}/edit', [ShipController::class,'edit']);
Route::patch('/ship/{ship}/update', [ShipController::class,'update']);

Route::delete('/ship/{ship}/delete', [ShipController::class,'delete']);
Route::get('/ship/create', [ShipController::class,'create']);
Route::post('/ship/store', [ShipController::class,'store']);

// Route::get('/', function () {
//     return view('home', [
//         'ships' => Ship::all()
//     ]);
// })->name('ship-list');


// Route::get('/ships/{ship}', function (Ship $ship) {
//     // return view('ship',[
//     //     'ship'=> Ship::find($id)
//     // ]);

//     //convention (wildcard and parameter type)
//     return view('ship.details', ['ship' => $ship]);
// });

