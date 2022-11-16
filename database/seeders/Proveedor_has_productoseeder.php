<?php

namespace Database\Seeders;

use App\Models\Proveedor_has_Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

use function GuzzleHttp\Promise\each;

class Proveedor_has_productoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Proveedor_has_Producto::factory(1)->create();
    }
}