<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    use HasFactory;

    protected $fillable = ['cantidad','precio','stock'];


 //Relacion uno a muchos inversa
    public function Producto(){
    return $this->belongsTo(Producto::class);
    }

    //Relacion uno a muchos inversa
public function Venta(){
    return $this->belongsTo(Venta::class);
    }

}
