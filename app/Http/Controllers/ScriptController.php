<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scriptController extends Controller
{
    public function index()
    {
        return view('script');
    }
}