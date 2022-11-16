<?php

namespace Database\Factories;






use App\Models\Detalle_venta;
use Illuminate\Support\Str;
use App\Models\Producto;
use App\Models\Venta;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class Detalle_ventaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $cantidad= $this->faker->sentence(2);
        $precio= $this->faker->sentence(2);
        $stock= $this->faker->sentence(2);
        $venta_id= Venta::all()->random();
        $producto_id= Producto::all()->random();




        return [

        'Cantidad'=> $cantidad,
        'Precio'=> $precio,
        'Stock'=> $stock,
        'venta_id'=>$venta_id->id,
        'producto_id'=>$producto_id->id,
        ];
    }
}
