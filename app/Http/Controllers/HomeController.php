<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrar_produto;

class HomeController extends Controller
{
    public function index(){
     
     $cadastrar_produtos = Cadastrar_produto::all();
    

     return view('welcome', ['cadastrar_produtos'=> $cadastrar_produtos]);

    }

     
    public function show ($id){

   
      $cadastrar_produtos = cadastrar_produto::findOrFail($id);

      //  add($produto);

      
     return view('produtos.cadastar_produto',['cadastrar_produtos'=> $cadastrar_produtos]);
 

      }
}  