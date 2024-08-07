<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;
    protected $table = 'ships';
    protected $fillable = ['name', 'type', 'dock_id'];
    
    public function dock(){
        return $this->belongsTo(Dock::class);
}
}
