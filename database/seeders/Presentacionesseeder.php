<?php

namespace Database\Seeders;

use App\Models\Presentacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class Presentacionesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        
         DB::table('presentaciones')->insert(   [

            [
            'Descripcion_presentacion'=>'Tortas',
            'Nombre_presentacion'=> 'wea',
            ],
            [
                'Descripcion_presentacion'=>'Tortas',
                'Nombre_presentacion'=> 'wea',   
            ]

         ]);
        

        
 


    }
}
