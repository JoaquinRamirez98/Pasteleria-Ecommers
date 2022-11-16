<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sabor_masa extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre_sabor_masas','Descripcion_sabor_masas'];

    //Relacion uno a muchos
public function Producto(){
    return $this->hasMany(Producto::class);
    }
}
