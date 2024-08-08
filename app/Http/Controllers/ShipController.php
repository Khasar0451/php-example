<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;
use App\Models\Dock;
class ShipController extends Controller
{
    public function list(){
        return view('ship.list', [
            'ships' => Ship::all()
        ]);
    }
    public function create(){
        return view("ship.add");
    }
    public function store(){
        Ship::create([
            "name"=> request('name'),
            'type' => request('type'),
            'dock_id' => 1,
        ]);
        return redirect ('/');
    }
    public function show(Ship $ship){
        return view('ship.show', ['ship' => $ship]);
    }
    public function edit(Ship $ship){
        return view('ship.edit', ['ship' => $ship]);
    }
    public function update(Ship $ship){
        $ship->update([
            'name'=> request('name'),
            'type'=> request('type'),
            'dock_id'=> Dock::where('name', request('dock'))->firstOrFail()->id,
        ]);
        return redirect('/');
    }
    public function destroy($id){
    }

}
