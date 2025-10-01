<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetallesVentaAdminController extends Controller
{
    public function index()
    {
        return view('administrador.detalles_venta_admin');
    }
}