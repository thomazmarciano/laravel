<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
{

    private $clientes = [
        [
            'nome' => 'João',
            'email' => 'joao@email.com'
        ],
        [
            'nome' => 'Thomaz',
            'email' => 'thomaz@email.com'
        ],
        [
            'nome' => 'Ana',
            'email' => 'ana@email.com'
        ],
        [
            'nome' => 'José',
            'email' => 'jose@email.com'
        ]
    ];

    public function cliente($dado, $index = 0){
        echo $this->clientes[$index][$dado];
    }


    // public function cliente($index){

    //     echo $this->clienteDetail($index);


    //     // if($index >= 0 && $index < count($this->clientes)){
    //     //     $this->clienteDetail($index);
    //     // echo 'Nome: ' . $this->clientes[$index]['nome'].'<br>';
    //     // echo 'Email: ' . $this->clientes[$index]['email'].'<br>';
    //     // } else {
    //     //     echo 'O cliente não existe';
    //     // }
    // }

    // private function clienteDetail($index){
    //     //echo 'Nome: ' . $this->clientes[$index]['nome'].'<br>Email: ' . $this->clientes[$index]['email'];
    //     if($index >= 0 && $index < count($this->clientes)){
    //         return "Nome: {$this->clientes[$index]['nome']} | Email: {$this->clientes[$index]['email']}";
    //     } else {
    //         return 'O cliente não existe';
    //     }
    // }
}
