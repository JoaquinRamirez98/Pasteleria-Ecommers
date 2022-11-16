<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithPagination;

class CategoriaFiltro extends Component
{
    use WithPagination;

    public $categoria;

    public $view = "grid";

    public function render()
    {
        $productos = $this->categoria->producto()->paginate(10);

        return view('livewire.categoria-filtro', compact('productos'));
    }
}
