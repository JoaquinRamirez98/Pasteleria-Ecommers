<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function __invoke(Request $request)
    {

        $name = $request->name;

        $productos = Producto::where('Nombre_producto', 'LIKE' ,"%" . $name . "%")
                                ->paginate(5);

        return view('search', compact('productos'));
    }
}
