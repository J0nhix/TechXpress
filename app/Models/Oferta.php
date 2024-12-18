<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'rebaja'
    ];
}
