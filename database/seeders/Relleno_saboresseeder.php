<?php

namespace Database\Seeders;

use App\Models\Relleno_sabore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class Relleno_saboresseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('rellenos_sabores')->insert(   [
            [
            'Nombre_relleno_sabor'=>'Tortas',
            'Descripcion_relleno_sabor'=> 'wea'

            ]
            ]);

        
    


    }
}
