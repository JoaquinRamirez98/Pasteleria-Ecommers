<?php

namespace App\Http\Livewire\Admin;

use App\Models\Producto;
use Livewire\Component;


use Livewire\WithPagination;

class ShowProducts extends Component
{
    use WithPagination;

    public $search;   

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        //hola mundo

        $productos = Producto::where('Nombre_producto', 'like', '%' . $this->search . '%')->paginate(8);

        return view('livewire.admin.show-products', compact('productos'))->layout('layouts.admin');
    }
}
