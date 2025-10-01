<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartadosAdminController extends Controller
{
    public function index()
    {
        return view('administrador.apartados_admin');
    }
}