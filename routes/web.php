<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\SessionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [HomeController::class, 'detailProduct'])->name('product');
Route::get('/products/category/{id}', [HomeController::class, 'categoryProduct'])->name('product.category');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/preguntas-frecuentes', [HomeController::class, 'faq'])->name('faq');
Route::get('/sobre-nosotros', [HomeController::class, 'about'])->name('about');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');

Route::post('/checkout/json', [HomeController::class, 'json'])->name('checkout.json');
//Route::get('/', [HomeController::class, 'platzi'])->name('platzi');

//Route::get('/', [
//    'uses' => '.'.HomeController.'.@index',
//    'as' => 'home_path'
//]);

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::post('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');
Route::post('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/session/product/get_p', [SessionController::class, 'getSessionDataProd'])->name('session.get_p');
Route::post('/session/product/set_p', [SessionController::class, 'storeSessionDataProd'])->name('session.store_p');
Route::post('/session/product/remove_p', [SessionController::class, 'deleteSessionDataProd'])->name('session.delete_p');
