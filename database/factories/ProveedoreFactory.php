<?php

namespace Database\Factories;






use App\Models\Proveedore;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProveedoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $Empresa= $this->faker->word();
        $Datos_proveedor= $this->faker->sentence(5);




        return [

        'Empresa'=> $Empresa,
        'Datos_proveedor'=> $Datos_proveedor,


        ];
    }
}
