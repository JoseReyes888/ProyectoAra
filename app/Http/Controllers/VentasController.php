<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ventasController extends Controller
{
    public function index()
    {
        return view('ventas');
    }
}