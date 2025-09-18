<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartadosController extends Controller
{
    public function index()
    {
        return view('apartados');
    }
}