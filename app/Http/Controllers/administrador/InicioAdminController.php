<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioAdminController extends Controller
{
    public function index()
    {
        return view('administrador.inicio_admin');
    }
}