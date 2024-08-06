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



Route::resource("ship", ShipController::class);



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

