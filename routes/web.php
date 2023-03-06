<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RecetasController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;
use App\Http\Controllers\CartController;

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



Route::get('/Register', [RegisterController::class, 'show']);

Route::post('/Register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/opiniones',[HomeController::class,'opiniones'])->name('opiniones');
Route::get('/gost',[HomeController::class,'gost'])->name('productos');
Route::get('/recetas',[HomeController::class,'recetas'])->name('recetas');
Route::get('/Register', [RegisterController::class, 'show'])->name('register');
Route::post('/Register', [RegisterController::class, 'showRegister'])->name('registerPost');
Route::get('/contactanos',[ContactanosController::class,'contactos'])->name('contactos');
Route::post('contactanos',[ContactanosController::class,'stor'])->name('contactanos.stor');
Route::get('/nosotros',[HomeController::class,'nosotros'])->name('nosotros');
Route::get('/formulario',[HomeController::class,'formulario']);
Route::post('/formulario', [HomeController::class,'store'])->name('formulario.store');

Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');




