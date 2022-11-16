<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;

    protected $fillable = ['Empresa','Datos_proveedor'];

//Relacion uno a muchos
public function Proveedor_has_Producto(){
    return $this->hasMany(Proveedor_has_Producto::class);
    }

}
