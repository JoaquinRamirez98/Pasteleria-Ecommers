<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaControlador extends Controller
{
    public function show(Categoria $categoria){
        return view('categorias.show', compact('categoria'));

    }
}
