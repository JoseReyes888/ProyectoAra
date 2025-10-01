<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetallesApartadosController extends Controller
{
    public function index()
    {
        return view('administrador.detalles_apartados_admin');
    }
}