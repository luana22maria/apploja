<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrar_produto;

class HomeController extends Controller
{
    public function index(){

     $search = request('search');

     if($search){
       $cadastrar_produtos = Cadastrar_produto::where([
              ['name_produto', 'like', '%'.$search.'%']    // array de pesquisa
          ])->get();
      }else{

        $cadastrar_produtos = Cadastrar_produto::all();
     }

       return view('welcome', ['cadastrar_produtos'=> $cadastrar_produtos, 'search'=> $search]);

    }

     
    public function show ($id){

   
      $cadastrar_produtos = cadastrar_produto::findOrFail($id);

      //  add($produto);

      
     return view('produtos.cadastar_produto',['cadastrar_produtos'=> $cadastrar_produtos]);
 

      }
}  