<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripcione extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'precio'
    ];

    public function usuario(){
        return $this->hasMany('App\Models\Usuario');
    }
}
