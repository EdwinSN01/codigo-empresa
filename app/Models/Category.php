<?php

namespace App\Models;
use App\Persona;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function servicios(){
        return $this->hasMany(Persona::class);
    }
}
