<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolicitudesVentasAdminController extends Controller
{
    public function index()
    {
        return view('administrador.solicitudes_ventas_admin');
    }
}