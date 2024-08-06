<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ShipController extends Controller
{
    public function index(){
        return view('home', [
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
        return redirect ('/ship');
    }
    public function show(Ship $ship){
        return view('ship.details', ['ship' => $ship]);
    }
    public function edit($id){
    }
    public function update(Request $request, $id){
    }
    public function destroy($id){
    }

}
