<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca_id',
        'modelo',
        'tipo',
        'precio',
        'imagen',
        'almacenamiento',
        'color',
        'ram',
        'bluetooth',
        'inalambrico',
        'microfono',
        'tamaño',
        'procesador',
        'stock',
        'oferta_id'
    ];

    public function oferta(){
        return $this->belongsTo('App\Models\Oferta');
    }

    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }

    public function pedidos(){
        return $this->belongsToMany('App\Models\Pedido');
    }
}
