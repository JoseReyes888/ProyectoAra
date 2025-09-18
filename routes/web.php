<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Inicio', function () {
    return view('Inicio');
});

Route::get('/apartados', [App\Http\Controllers\ApartadosController::class, 'index'])->name('apartados');

Route::get('/detalles_apartados', [App\Http\Controllers\DetallesApartadosController::class, 'index'])->name('detallesApartados');

Route::get('/detalles_venta', [App\Http\Controllers\DetallesVentaController::class, 'index'])->name('detallesVenta');

Route::get('/fraccionamiento', [App\Http\Controllers\FraccionamientoController::class, 'index'])->name('fraccionamiento');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/inicio_admin', [App\Http\Controllers\InicioAdminController::class, 'index'])->name('inicio');

Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::get('/script', [App\Http\Controllers\ScriptController::class, 'index'])->name('script');
Route::get('/ventas', [App\Http\Controllers\VentasController::class, 'index'])->name('ventas');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');