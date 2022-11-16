<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

class Categoriaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         $categorias =  [
        
            [
            'Nombre_categoria'=>'Tortas',
            'Slug'=> Str::slug('Tortas'),
            'Icon'=> '<div class="icons8-cherry-cheesecake"></div>'

            ],


            [
            
            'Nombre_categoria'=>'Tartas',
            'Slug'=> Str::slug('Tartas'),
            'Icon'=>'<div class="icons8-pie"></div>'

            ],

            [
            
            'Nombre_categoria'=>'Macarrons',
            'Slug'=> Str::slug('Macarrons'),
            'Icon'=>'<div class="icons8-pink-macaron"></div>'

            ],

            [
            
            'Nombre_categoria'=>'Postres',
            'Slug'=> Str::slug('Postres'),
            'Icon'=>'<div class="icons8-dessert"></div>'

            ],

            [
            
            'Nombre_categoria'=>'Alfajores',
            'Slug'=> Str::slug('Alfajores'),
            'Icon'=>'<div class="icons8-macaron"></div>'

            ],


            [
            
            'Nombre_categoria'=>'Pan dulce',
            'Slug'=> Str::slug('Pan dulce'),
            'Icon'=>'<div class="icons8-bread"></div>'

            ],

            [
            
            'Nombre_categoria'=>'Facturas',
            'Slug'=> Str::slug('Facturas'),
            'Icon'=>'<div class="icons8-croissant"></div>'

            ],

            [
            
            'Nombre_categoria'=>'Cupcakes',
            'Slug'=> Str::slug('Cupcakes'),
            'Icon'=>'<div class="icons8-cupcake"></div>'
            ],
        ];

        foreach ($categorias as $categoria) {
            
            Categoria::factory(1)->create($categoria);
        } 

        
    


    }
}
