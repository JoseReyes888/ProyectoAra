<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/Inicio', function () {
    return view('Inicio');
});


Route::get('/apartados', [App\Http\Controllers\ApartadosController::class, 'index'])->name('apartados');

Route::get('/detalles_apartados', [App\Http\Controllers\DetallesApartadosController::class, 'index'])->name('detallesApartados');

Route::get('/detalles_venta', [App\Http\Controllers\DetallesVentaController::class, 'index'])->name('detallesVenta');

Route::get('/fraccionamiento', [App\Http\Controllers\FraccionamientoController::class, 'index'])->name('fraccionamiento');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');


Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
Route::get('/script', [App\Http\Controllers\ScriptController::class, 'index'])->name('script');
Route::get('/ventas', [App\Http\Controllers\VentasController::class, 'index'])->name('ventas');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

//Rutas para Administrador

Route::get('administrador/inicio_admin', [App\Http\Controllers\administrador\InicioAdminController::class, 'index'])->name('inicio_admin');

Route::get('administrador/apartados_admin', [App\Http\Controllers\administrador\ApartadosAdminController::class, 'index'])->name('apartados_admin');

Route::get('administrador/fraccionamiento_admin', [App\Http\Controllers\administrador\FraccionamientoAdminController::class, 'index'])->name('fraccionamiento_admin');
Route::get('administrador/detalles_apartados_admin', [App\Http\Controllers\administrador\DetallesApartadosController::class, 'index'])->name('detalles_apartados_admin');
Route::get('administrador/ventas_admin', [App\Http\Controllers\administrador\VentasAdminController::class, 'index'])->name('ventas_admin');
Route::get('administrador/detalles_venta_admin', [App\Http\Controllers\administrador\DetallesVentaAdminController::class, 'index'])->name('detalles_venta_admin');
Route::get('administrador/solicitudes_apartados_admin', [App\Http\Controllers\administrador\SolicitudesApartadosAdminController::class, 'index'])->name('solicitudes_apartados_admin');
Route::get('administrador/solicitudes_ventas_admin', [App\Http\Controllers\administrador\SolicitudesVentasAdminController::class, 'index'])->name('solicitudes_ventas_admin');
Route::get('administrador/gestion_usuarios_admin', [App\Http\Controllers\administrador\GestionUsuariosAdminController::class, 'index'])->name('gestion_usuarios_admin');