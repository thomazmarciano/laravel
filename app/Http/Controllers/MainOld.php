<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    // Route::get('/user/{nome}/{sobrenome}', 'App\Http\Controllers\Main@user');

    // public function user($nome, $sobrenome) {
    //     return view('user', [
    //         'nome' => $nome,
    //         'sobrenome' => $sobrenome
    //         ]);

    //     //echo 'Controller<br>';
    //     //echo "$nome $sobrenome";
    // }

    // Route::get('/user/{nome}/{idade}/{sobrenome?}', 'App\Http\Controllers\Main@user');
        // public function nome($nome, $idade, $sobrenome = ''){
        //     return view('nome', [
        //         'nome' => $nome,
        //         'sobrenome' => $sobrenome,
        //         'idade' => $idade
        //     ]);

        // }
        public function home() {
            echo '<h3>HOME</h3>';
            echo '<hr>';
            echo '<a href="'.route('r1').'">Home</a><br>';
            echo '<a href="'.route('r2').'">Serviços</a><br>';
            echo '<a href="'.route('r3').'">Contatos</a><br>';
        }

        public function servicos() {
            echo '<h3>SERVIÇOS</h3>';
            echo '<hr>';
            echo '<a href="'.route('r1').'">Home</a><br>';
            echo '<a href="'.route('r2').'">Serviços</a><br>';
            echo '<a href="'.route('r3').'">Contatos</a><br>';
        }

        public function contatos() {
            echo '<h3>CONTATOS</h3>';
            echo '<hr>';
            echo '<a href="'.route('r1').'">Home</a><br>';
            echo '<a href="'.route('r2').'">Serviços</a><br>';
            echo '<a href="'.route('r3').'">Contatos</a><br>';
        }
}
