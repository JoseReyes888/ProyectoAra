<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentasAdminController extends Controller
{
    public function index()
    {
        return view('administrador.ventas_admin');
    }
}