<?php

use Illuminate\Support\Facades\Route; 


use App\Http\Livewire\Admin\ShowProducts;


use App\Http\Livewire\Admin\CreateProduct;

Route::get('/', ShowProducts::class)->name('admin.index');

Route::get('productos/create', CreateProduct::class)->name('admin.productos.create');

Route::get('productos/{producto}/edit', function () {

})->name('admin.productos.edit');