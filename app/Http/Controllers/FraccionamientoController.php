<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fraccionamientoController extends Controller
{
    public function index()
    {
        return view('fraccionamiento');
    }
}