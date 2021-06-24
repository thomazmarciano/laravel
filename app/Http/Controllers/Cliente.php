<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cliente extends Controller
{
    public function pagina(){

        echo 'inicio';
        echo view('clientes.cliente');
        echo 'fim';
    }
}
