<?php

namespace Database\Seeders;

use App\Models\Decoracione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class Decoracionesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('decoraciones')->insert(   [    
        [

        'Descripcion_decoracion'=> 'wea',
       'Nombre_decoracion'=>'Tortas',
        ],

        [

            'Descripcion_decoracion'=> 'wea',
           'Nombre_decoracion'=>'Tortas',
        ],

        [

            'Descripcion_decoracion'=> 'wea',
           'Nombre_decoracion'=>'Tortas',
        ],
        [

            'Descripcion_decoracion'=> 'wea',
           'Nombre_decoracion'=>'Tortas',
        ],
        [

            'Descripcion_decoracion'=> 'wea',
           'Nombre_decoracion'=>'Tortas',
        ],
        [

            'Descripcion_decoracion'=> 'wea',
           'Nombre_decoracion'=>'Tortas',
        ]

        ]);

    }
}
