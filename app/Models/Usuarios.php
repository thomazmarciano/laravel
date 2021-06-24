<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Usuarios{

    // public function teste(){
    //     return 'OK!';
    // }

    public function buscar_todos_usuarios(){
        $resultados = DB::select("SELECT * FROM usuarios");
        return $resultados;
    }

    public function buscar_usuario($nome){

        $params = [
          'nome' => $nome
        ];

        $resultados = DB::select("SELECT * FROM usuarios WHERE nome = :nome", $params);
        return $resultados;
    }

    // public function buscar_nomes(){
    //     $resultados = DB::select("SELECT nome FROM usuarios");
    //     return $resultados;
    // }

    //forma mais limpa de escrever o código
    public function buscar_nomes(){
        return DB::select("SELECT nome FROM usuarios");
    }

}

?>
