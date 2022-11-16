<?php

namespace Database\Factories;






use App\Models\Venta;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $fecha_hora= $this->faker->dateTime();
        $cantidad= $this->faker->sentence(2);
        $valor_total=$this->faker->sentence(2);
        $estado_venta=$this->faker->word();
        $fecha_entrega=$this->faker->dateTime();
        $direccion_entrega=$this->faker->sentence(3);
        $userid = User::all()->random();


        return [

        'Fecha/Hora'=> $fecha_hora,
        'Cantidad'=> $cantidad,
        'Valor_total'=>$valor_total,
        'Estado_de_venta'=>$estado_venta,
        'Fecha_entrega'=>$fecha_entrega,
        'Direccion_entrega'=>$direccion_entrega,
        'user_id'=>$userid->id,


        ];
    }
}
