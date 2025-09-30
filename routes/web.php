<?php

use Illuminate\Support\Facades\Route;

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

// passar comandos n rotas:
//$nome = "Luana";

// na view receber/ {{$nome}} // para mostrar.

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\cadastrarController;
use App\Http\Controllers\FaleconoscoController;
use App\Http\Controllers\HomeController;




Route::get('/',[HomeController::class,'index']);

Route::get('/produtos/produto_cadastrados', [ProdutoController::class, 'produtos']);
Route::post('/cadastrar_produto', [ProdutoController::class, 'store']);
Route::get('/produtos/{id?}', [ProdutoController::class, 'show']);


Route::get('/cadastrar/create', [cadastrarController::class, 'cadastrar_usuario']);
Route::post('/cadastrar', [cadastrarController::class, 'store']);

Route::get('/faleconosco/comentarios', [FaleconoscoController::class, 'cadastrar_comentarios']);
Route::post('/comentario', [FaleconoscoController::class, 'store']);   
 
Route::get('/contato', [ProdutoController::class, 'index']);
