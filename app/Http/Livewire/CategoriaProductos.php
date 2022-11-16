<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoriaProductos extends Component
{

    public $categoria;

    public $productos = [];

    public function loadPosts(){
        $this->productos = $this->categoria->producto;

        $this->emit('glider', $this->categoria->id);
    }

    public function render()
    {
        return view('livewire.categoria-productos');
    }
}
