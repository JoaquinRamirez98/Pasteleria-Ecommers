<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public $open = false;

    public function updatedSearch($value){
        if ($value){
            $this->open = true;
        }else{
            $this->open = false;
        }
    }

    public function render()
    {
        if ($this->search) { 
            $productos = Producto::where('Nombre_producto', 'LIKE' ,"%" . $this->search . "%")
                                ->take(8)
                                ->get();
        } else {
            $productos = [];
        }
        

        return view('livewire.search', compact('productos'));
    }
}
