<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
//use App\Http\Livewire\ClientProducts;

//Route::get('', [HomeController::class, 'index']);

Route::redirect('', 'client/pedidos');
//Route::get('products', ClientProducts::class)->middleware('can:Leer')->name('products.index');

Route::get('dashboard', [Homecontroller::class, 'dashboard'])->name('dashboard');
Route::get('pedidos', [Homecontroller::class, 'pedidos'])->name('dashboard.pedidos');
Route::get('history', [Homecontroller::class, 'history'])->name('dashboard.history');
