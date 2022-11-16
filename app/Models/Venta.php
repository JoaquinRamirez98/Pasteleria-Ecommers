<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['Fecha/Hora','Cantidad','Valor_total','Estado_de_venta','Fecha_entrega','Direccion_entrega'];


 //Relacion uno a muchos inversa
    public function Detalle_venta(){
    return $this->hasMany(Detalle_venta::class);
    }


    //Relacion muchos a muchos
    public function Productos(){
    return $this->hasManyThrough(Productos::class,Detalle_venta::class);
    }




}

