<?php

namespace Database\Factories;

use App\Models\Producto;
use App\Models\Proveedor_has_Producto;
use App\Models\Proveedore;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class Proveedor_has_productoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $producto= Producto::all()->random();;
        $proveedor= Proveedore::all()->random();;
        $descripcion= $this->faker->sentence(5);




        return [

        'producto_id'=> $producto->id,
        'proveedor_id'=> $proveedor->id,
        'Descripcion'=> $descripcion,


        ];
    }
}
