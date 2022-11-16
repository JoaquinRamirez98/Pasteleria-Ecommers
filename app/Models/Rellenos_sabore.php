<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rellenos_sabore extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre_relleno_sabor','Descripcion_relleno_sabor'];

//Relacion uno a muchos
public function Producto(){
    return $this->hasMany(Producto::class);
    }



}
