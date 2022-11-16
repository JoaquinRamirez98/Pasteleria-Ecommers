<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;

class AddCartItem extends Component
{
    public $producto, $quantity;
    public $qty = 1;
    // aca pasamos la imagen del producto en el carrito de compra
    public $options = [];

    public function mount(){
        $this->quantity = qty_avilable($this->producto->id);
        $this->options['image'] = Storage::url($this->producto->images->first()->url);
    }

    public function decrement(){
        $this->qty = $this->qty - 1; 
    }

    public function increment(){
        $this->qty = $this->qty + 1;
    }

    public function addItem(){
        Cart::add(['id' => $this->producto->id, 
                    'name' => $this->producto->Nombre_producto, 
                    'qty' => $this->qty, 
                    'price' => $this->producto->precio, 
                    'weight' => 550,
                    'options' => $this->options
                 ]);
        
        $this->quantity = qty_avilable($this->producto->id); 
        
        $this->reset('qty');
        // Esto es para que se actualice el numero de elementos en el carrito de compras
        $this->emitTo('dropdown-cart', 'render');
    }

    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
