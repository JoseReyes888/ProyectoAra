<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolicitudesApartadosAdminController extends Controller
{
    public function index()
    {
        return view('administrador.solicitudes_apartados_admin');
    }
}