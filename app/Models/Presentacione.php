<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacione extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre_presentacion','Descripcion_presentacion'];

//Relacion uno a muchos
public function Producto(){
    return $this->hasMany(Producto::class);
    }

}
