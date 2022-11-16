<?php

namespace Database\Seeders;

use App\Models\Sabor_masa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class Sabor_masaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('sabor_masas')->insert(   [
            [
  
            'Nombre_sabor_masas'=>'Tortas',
            'Descripcion_sabor_masas'=> 'wea'

            ]
         ]);

       
        
    


    }
}
