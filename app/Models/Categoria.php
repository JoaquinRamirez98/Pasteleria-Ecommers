<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre_categoria','Descripcion_categoria'];


        //Relacion uno a muchos
    public function Producto(){
        return $this->hasMany(Producto::class);
        }

    //link amigables
    public function getRouteKeyName()
    {
        return 'Slug';
    }
}
