<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarAdminController extends Controller
{
    public function index()
    {
        return view('navbar_admin');
    }
}