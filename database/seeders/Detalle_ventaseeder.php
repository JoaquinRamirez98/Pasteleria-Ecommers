<?php

namespace Database\Seeders;

use App\Models\Detalle_venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

use function GuzzleHttp\Promise\each;

class Detalle_ventaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Detalle_venta::factory(1)->create();
    }
}