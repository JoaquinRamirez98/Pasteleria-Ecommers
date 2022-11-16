<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\imagenes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;


use function GuzzleHttp\Promise\each;

class Productoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Producto::factory(1)->create()->each(function(Producto $producto){
            imagenes::factory(4)->create([
                'Imageable_id' => $producto->id,
                'Imageable_type' => Producto::class
            ]);
       });
    }
}