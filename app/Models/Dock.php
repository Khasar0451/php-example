<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dock extends Model
{
    protected $fillable = ['name'];
    use HasFactory;
    public function ship()
    {
        return $this->hasMany(Ship::class);
    }
}
