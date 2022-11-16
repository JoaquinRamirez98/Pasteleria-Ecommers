<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\user;
use Illuminate\Support\Facades\Storage;
use App\Models\Categoria;
use App\Models\Detalle_venta;
use App\Models\Venta;
use Database\Factories\ProductoFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('productos');

        Storage::makeDirectory('categories');
        Storage::makeDirectory('productos');

        
       
    

       
        $this->call(Decoracionesseeder::class);
        $this->call(Presentacionesseeder::class);
        $this->call(Sabor_masaseeder::class);
        $this->call(Relleno_saboresseeder::class);
        $this->call(Categoriaseeder::class);
        $this->call(Productoseeder::class);
        $this->call(Proveedoreseeder::class);
        $this->call(Proveedor_has_productoseeder::class);
        $this->call(Tipousuarioseeder::class);
        $this->call(Userseeder::class);
        $this->call(Ventaseeder::class);
        $this->call(Detalle_ventaseeder::class);
        $this->call(ImagenesSeeder::class);
    }
}
