<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Decoracione;
use App\Models\Presentacione;
use app\Models\Producto;
use App\Models\Rellenos_sabore;
use App\Models\Sabor_masa;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $Nombre_producto = $this->faker->sentence(4);

        $categoria = Categoria::all()->random();
        $presentacion = Presentacione::all()->random();
        $sabor_masa = Sabor_masa::all()->random();
        $relleno_sabor = Rellenos_sabore::all()->random();
        $decoracion = Decoracione::all()->random();




        return [

        'Nombre_producto'=> $Nombre_producto,
        'Slug' => Str::slug($Nombre_producto),
        'Stock' => $this->faker->randomElement([0,1,2,3,4,5,6,7,8,9]),
        'Categoria_id'=> $categoria->id,
        'Presentacion_id'=> $presentacion->id,
        'sabor_masa_id'=> $sabor_masa->id,
        'relleno_sabor_id' => $relleno_sabor->id,
        'decoracion_id' => $decoracion->id,

        ];
    }
}
