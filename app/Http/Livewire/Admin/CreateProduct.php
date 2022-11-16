<?php

namespace App\Http\Livewire\Admin;

use App\Models\Categoria;
use App\Models\Decoracione;
use App\Models\Presentacione;
use App\Models\Producto;
use App\Models\Rellenos_sabore;
use App\Models\Sabor_masa;
use Livewire\Component;
use Illuminate\Database\Schema\Builder;


use Illuminate\Support\Str;

class CreateProduct extends Component
{
    public $categorias, $sabor_masas, $relleno_sabores, $presentaciones, $decoraciones;

    public $name, $slug;

    public $categorias_id="", $sabor_masas_id="", $relleno_sabores_id="", $presentaciones_id="", $decoraciones_id="";

    public $price, $Stock;

    protected $rules = [
        'categorias_id' => 'required',
        'name' => 'required',
        'slug' => 'required|unique:productos',
        'price'=> 'required',
        'sabor_masas_id'=> 'required',
        'relleno_sabores_id'=> 'required',
        'presentaciones_id'=> 'required',
        'decoraciones_id'=> 'required',
        'Stock' => 'required',
    ];    
    

    public function updatedName($value){
        $this->slug = Str::slug($value);
    }


    public function mount(){

        $this->categorias = Categoria::all();
        $this->sabor_masas = Sabor_masa::all();
        $this->relleno_sabores = Rellenos_sabore::all();
        $this->presentaciones = Presentacione::all();
        $this->decoraciones = Decoracione::all();

    }

    Public function save(){
        
        $rules = $this->rules;

        $this->validate($rules);

        $producto = new Producto();

        $producto->Nombre_producto = $this->name;
        $producto->slug = $this->slug;
        $producto->precio = $this->price;
        $producto->Stock = $this->Stock;
        $producto->categoria_id = $this->categorias_id;
        $producto->presentacion_id = $this->presentaciones_id;
        $producto->sabor_masa_id = $this->sabor_masas_id;
        $producto->relleno_sabor_id = $this->relleno_sabores_id;
        $producto->decoracion_id = $this->decoraciones_id;

        $producto->save();

        
    }

    public function render()
    {
        return view('livewire.admin.create-product')->layout('layouts.admin');
    }
}
