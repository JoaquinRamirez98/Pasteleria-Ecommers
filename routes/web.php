<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoriaControlador;
use App\Http\Controllers\ProductoControl;
use App\Http\Livewire\ShoppingCart;


Route::get('/', welcomeController::class);

Route::get('search', SearchController::class)->name('search');

Route::get('categorias/{categoria}', [CategoriaControlador::class, 'show'])->name('categorias.show');

Route::get('productos/{producto}', [ProductoControl::class, 'show'])->name('productos.show');

Route::get('shopping-cart', ShoppingCart::class)->middleware('auth')->name('shopping-cart');




