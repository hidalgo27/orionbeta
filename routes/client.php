<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ClientProducts;

//Route::get('', [HomeController::class, 'index']);

Route::redirect('', 'client/products');
Route::get('products', ClientProducts::class)->middleware('can:Leer')->name('products.index');
