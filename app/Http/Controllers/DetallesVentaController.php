<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detallesVentaController extends Controller
{
    public function index()
    {
        return view('detalles_venta');
    }
}