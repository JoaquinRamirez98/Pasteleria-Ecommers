<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor_has_Producto extends Model
{
    use HasFactory;

//Relacion uno a muchos inversa
public function Producto(){
    return $this->belongsTo(Producto::class);
    }

//Relacion uno a muchos inversa
public function Proveedore(){
    return $this->belongsTo(Proveedore::class);
    }





}
