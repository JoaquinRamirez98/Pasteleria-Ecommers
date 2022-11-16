<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decoracione extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre_decoracion','Descripcion_decoracion'];

//Relacion uno a muchos
public function Producto(){
    return $this->hasMany(Producto::class);
    }


}
