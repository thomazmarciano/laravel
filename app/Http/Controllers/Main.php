<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuarios;
use App\Models\Operador;
use App\Models\Cliente;
use Psy\Command\WhereamiCommand;
use SebastianBergmann\Diff\Chunk;

class Main extends Controller
{
    public function home()
    {
        // Cliente::find(1)->delete();
        // $clientes = Cliente::all();
        // $clientes = Cliente::onlyTrashed()->get();

        // Cliente::withTrashed()->find(5)->forceDelete();

        // $clientes = Cliente::all();

        // dd($clientes);

        // ---Eloquent ORM---
        // CRUD
        // Inserir Registro
        // $cliente = new Cliente();
        // $cliente->nome = "João";
        // $cliente->email = "joao@email.com";
        // $cliente->save();
        // echo "Inserido!";


        // $cliente = Cliente::find(1);
        // $cliente->nome = "João Silva";
        // $cliente->save();
        // echo 'Atualizado';

    //     $cliente = Cliente::find(1);
    //     $cliente->delete();
    //     echo 'Deletado';

    }

        // $this->inserir();


        // Criar Clientes
        // private function inserir($numClientes = 10)
        // {
        //     $nomes = ['joao', 'ana', 'carlos', 'antonio', 'rui', 'maria'];
        //     $sobrenomes = ['silva', 'oliveira', 'castro', 'martins', 'gomes', 'freitas'];
        //     $dominios = ['@gmail.com', '@hotmail.com', '@outlook.com'];

        //     $clientes = [];
        //     for($i = 1; $i <= $numClientes; $i++){

        //         $nome = $nomes[rand(0,count($nomes)-1)];
        //         $sobrenome = $sobrenomes[rand(0,count($sobrenomes)-1)];
        //         $email = $nome . '_' . $sobrenome.$dominios[rand(0,count($dominios)-1)];
        //         array_push($clientes, [ 'nome' => "$nome $sobrenome", 'email' => $email, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
        //     }

        //     // Limpar tabela de Clientes
        //     Cliente::truncate();

        //     // Inserir novos clientes
        //     Cliente::insert($clientes);

        // }

        // $cliente = Cliente::find(5);
        // $cliente->delete();
        // echo 'Deletado';

        // Cliente::destroy([1, 3, 100]);


        // $cliente = Cliente::find(4);
        // $cliente->delete();

        // $clientes = CLiente::all();
        // dd($clientes);
        // echo 'Ok';


        // ---Eloquent ORM---
        // $res = Operador::where('id', '>', 290)->max('pontuacao');
        // echo $res;
        // die();

        // echo "$res->nome - $res->email - $res->pontuacao";

        // echo '<pre>';
        // print_r($res);

        // $resultados = Operador::all();

        // $resultados = Operador::where('pontuacao', 20)->get();


        // echo $resultados[0]->email;
        // die();
        // echo '<pre>';
        // print_r($resultados);

        // foreach ($resultados as $operador){
        //     echo '<p>'.$operador->nome.'</p>';
        // }

        // ---Query Builder---
        // $parametros = ['Ana'];
        // $usuarios = DB::select("SELECT * FROM usuarios WHERE nome = ?", $parametros);
        // echo '<pre>';
        // print_r($usuarios);

        // foreach($usuarios as $usuario){
        //     echo '<p>'.$usuario->id.'</p>';
        //     echo '<p>'.$usuario->nome.'</p>';
        //     dd($usuarios);
        // }

        // $parametros = [
        //     'n' => 'Ana'
        // ];
        // $usuarios = DB::select("SELECT * FROM usuarios WHERE nome = :n", $parametros);
        // dd($usuarios);

        //DB::update("UPDATE usuarios SET nome = 'Franklin' WHERE nome = 'Ana'");

        // $usuarios = new Usuarios;
        // $resultados = $usuarios->buscar_todos_usuarios();
        // dd($resultados);

        // $usuarios = new Usuarios;
        // $resultados = $usuarios->buscar_usuario('Tom');
        // dd($resultados);

        // $usuarios = new Usuarios;
        // $resultados = $usuarios->buscar_nomes();
        // dd($resultados);

        // $this->criar();
        // die('Finalizado');


        // $res = DB::table('usuarios')->where('id', 2)->value('email');

        // $res = DB::table('usuarios')->where('id', '<=', 30)->pluck('email', 'nome');

        // echo '<pre>';
        // $i = 0;
        // DB::table('usuarios')->orderBy('id')->chunk(5, function($res){
        //     echo '<hr>';
        //     foreach($res as $usuario){
        //         echo $usuario->nome . '<br>';
        //     }
        //     echo '<hr>';

        //     global $i;
        //     $i++;
        //     if ($i == 3){
        //         return false;
        //     }
        // });

        // $res = DB::table('usuarios')->select('nome', 'email')->get();
        // $res = DB::table('usuarios')->select('pontuacao', 'email')->get();
        // $this->apresentar($res);

        // $res = DB::table('usuarios')->select('email', 'pontuacao');
        // $res_final = $res->addSelect('nome')->get();
        // $this->apresentar($res_final);

        // $res = DB::table('usuarios')->select(DB::raw('COUNT(*) AS total'))->get();
        // $res = DB::table('usuarios')->select(DB::raw('SUM(pontuacao) AS total'))->get();
        // $res = DB::table('usuarios')->select(DB::raw('SUM(pontuacao) AS total'))->where('id', '<', 100)->get();
        // $this->apresentar($res);


        // $res = DB::table('usuarios')->selectRaw('SUM(pontuacao) total')->get();
        // $multiplicador = 0.5;
        // $res = DB::table('usuarios')->selectRaw('nome, pontuacao * ?', [$multiplicador])->where('id','<', 200)->orderBy('pontuacao')->get();
        // $this->apresentar($res);


        // $res = DB::table('usuarios')
        //     ->join('usuarios_mobile', 'usuarios.id', '=', 'usuarios_mobile.id_usuario')
        //     ->select('usuarios.nome', 'usuarios_mobile.mobile')
        //     ->get();
        // $this->apresentar($res);

        // $res = DB::table('usuarios')
        // ->rightJoin('usuarios_mobile', 'usuarios.id', '=', 'usuarios_mobile.id_usuario')
        // ->select('usuarios.nome', 'usuarios_mobile.mobile')
        // ->get();
        // $this->apresentar($res);

        // foreach (Operador::all() as $operador) {
        //     echo '<hr>';
        //     echo $operador->nome.'<br />';
        //     echo $operador->email.'<br />';
        //     echo '<pre>';
        // }

    // }

    // private function apresentar($resultados){
    //     echo '<pre>';
    //     print_r($resultados);
    // }

    // private function criar(){
    //     DB::statement("TRUNCATE usuarios");
    //     $num_rows = 300;
    //     $sql = "INSERT INTO usuarios VALUES";
    //         for($i = 1; $i <= $num_rows; $i++){
    //             $pontuacao = rand(1, 100);
    //             $sql .="(0, 'nome $i', 'email$i@gmail.com', $pontuacao),";
    //         }
    //     $sql = rtrim($sql, ',');
    //     DB::insert($sql);
    // }

        // foreach ($res as $usuario){
        //     echo $usuario->id . '<br>';
        //     echo $usuario->nome . '<br>';
        //     echo $usuario->email . '<br>';
        //     echo '<br>';
        // }
}
