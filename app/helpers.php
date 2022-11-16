<?php

use App\Models\Producto;
use Gloudemans\Shoppingcart\Facades\Cart;

function quantity($producto_id){
    $producto = Producto::find($producto_id);

    $quantity = $producto->Stock;

    return $quantity;

}

function qty_added($producto_id){

    $cart = Cart::content();

    $item = $cart->where('id', $producto_id)->first();

    if($item){
        return $item->qty;
    }else{
        return 0;
    }
    
}

function qty_avilable($producto_id){

    return quantity($producto_id) - qty_added($producto_id);
}


function discount($item){
    $producto = Producto::find($item->id);
    $qty_available = qty_avilable($item->id);

    $producto->quantity = $qty_available;
    $producto->save();

}

