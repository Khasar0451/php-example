<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Ship{
    private static $data = [
        [
            "id"=> 1,
            'type' => 'Escort',
            'dock' => 'A2',
            'name' => 'Distant Voyager',
        ],
                [
                    'id'=> 2,
            'type' => 'Escort',
            'dock' => 'A3',
            'name' => 'Distant Protector',
                ],
        [
            'id'=> 3,
            'type' => 'Destroyer',
            'dock' => 'B5',
            'name' => 'The Disruptor',
        ]

    ];
    public static function all():array{
        return self::$data;
    }
    public static function find($id){
        return Arr::first(self::$data, fn($ship)=>$ship['id'] == $id);
    }
}