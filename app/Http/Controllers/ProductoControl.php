<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Producto;

class ProductoControl extends Controller
{
    public function show(Producto $producto){
        return view('productos.show', compact('producto'));
    }
}
