<?php

namespace App\Http\Controllers\administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GestionUsuariosAdminController extends Controller
{
    public function index()
    {
        return view('administrador.gestion_usuarios_admin');
    }
}