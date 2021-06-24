<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::view('/pagina', 'pagina');
//Route::view('/pagina1', 'pagina1');
//Route::view('/pagina2', 'pagina2', ['nome' => 'Thomaz']);
//Route::get('/pagina2', 'App\Http\Controllers\Main@mostrarNome');

Route::get('/user/{nome}', function ($nome){
    echo "Nome - $nome";
});

// Route::get('/user/{nome}/{sobrenome}', function ($nome, $sobrenome){
//     //echo 'Nome - ' . $nome . ' ' . $sobrenome;
//     echo "Nome - $nome $sobrenome";
// });

// Route::get('/user/{nome}/{sobrenome}', 'App\Http\Controllers\Main@user');

// Route::get('/user/{nome}/{idade}/{sobrenome?}', function ($nome, $idade, $sobrenome = ''){
//     echo "Nome - $nome $sobrenome | Idade: $idade";
// });

// Route::get('/user/{nome}/{idade}/{sobrenome?}', 'App\Http\Controllers\Main@nome');

// Route::get('/home', 'App\Http\Controllers\Main@home')->name('r1');
// Route::get('/servicos', 'App\Http\Controllers\Main@servicos')->name('r2');
// Route::get('/contatos', 'App\Http\Controllers\Main@contatos')->name('r3');

// Route::get('/clientes', 'App\Http\Controllers\Clientes@index');
// Route::get('/clientes_nomes', 'App\Http\Controllers\Clientes@nomes');
// Route::get('/clientes_email', 'App\Http\Controllers\Clientes@email');
// Route::get('produtos', 'App\Http\Controllers\Estoque\Produtos@index');
// Route::get('dados/{a}', 'App\Http\Controllers\Stats');
// Route::get('cliente/{index}', 'App\Http\Controllers\Clientes@cliente');
// Route::get('cliente/{dado}/{index?}', 'App\Http\Controllers\Clientes@cliente');
// Route::resource('produto', 'App\Http\Controllers\Produtos');
// Route::view('ver', 'clientes.cliente');
//Route::get('ver', 'App\Http\Controllers\Cliente@pagina');
Route::get('/', [Main::class, 'home']);
Route::get('endereco_teste', 'App\Http\Controllers\Main@teste')->name('minha_route');
