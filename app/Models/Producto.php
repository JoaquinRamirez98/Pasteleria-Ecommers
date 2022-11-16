<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    protected $fillable = ['Nombre_producto','Stock'];


 //Relacion uno a muchos inversa
    public function Categoria(){
    return $this->belongsTo(Categoria::class);
    }

 //Relacion uno a muchos inversa
    public function Presentacione(){
    return $this->belongsTo(Presentacione::class);
    }

//Relacion uno a muchos inversa
public function Decoracione(){
    return $this->belongsTo(Decoracione::class);
    }

//Relacion uno a muchos inversa
public function Rellenos_sabore(){
    return $this->belongsTo(Relleno_sabore::class);
    }

//Relacion uno a muchos inversa
public function Sabor_masa(){
    return $this->belongsTo(Sabor_masa::class);
    }

//Relacion uno a muchos
public function Detalle_venta(){
    return $this->hasMany(Detalle_venta::class);
    }

//Relacion uno a muchos
public function Proveedor_has_Producto(){
    return $this->hasMany(Proveedor_has_Producto::class);
    }

public function images(){
return $this->morphMany(imagenes::class, 'Imageable');

}

//link amigables
public function getRouteKeyName()
{
    return 'slug';
}

public $timestamps= false;



}
