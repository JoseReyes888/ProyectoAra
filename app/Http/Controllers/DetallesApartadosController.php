<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detallesApartadosController extends Controller
{
    public function index()
    {
        return view('detalles_apartados');
    }
}