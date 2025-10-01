<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FraccionamientoAdminController extends Controller
{
    public function index()
    {
        return view('administrador.fraccionamiento_admin');
    }
}