<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //

  public function realCampestre(): string
    {
        return view('Inicio', ['title' => 'Nelva Bienes Raíces']);
    }

}
