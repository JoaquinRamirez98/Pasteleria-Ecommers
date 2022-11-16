<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DropdownCart extends Component
{
    // llamamos al evento render que pedimos en el AddCartItem
    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.dropdown-cart');
    }
}
