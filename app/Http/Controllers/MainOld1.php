<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function home(){
        $data =[
            'titulo' => 'Página de Teste',
            'texto' => 'Esse é o texto da página',
            'valor' => 100,
            'nome' => '',
            'nomes' => ['João', 'Carlos', 'Ana', 'Thomaz', 'José']
        ];
        //return view('home', ['nome' => 'Thomaz', 'sobrenome' => 'Braga']);
        return view('home', $data);
    }

    public function teste(){
        echo 'Estou aqui!';
    }
}
