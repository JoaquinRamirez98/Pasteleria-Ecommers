<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipousuarioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Tipousuarios')->insert(   [

            [

            'Nombre_tipousuario'=> 'Administrador'

            ],

            [

            'Nombre_tipousuario'=> 'Cliente'
    
            ],
        
            ]);




    }
}
