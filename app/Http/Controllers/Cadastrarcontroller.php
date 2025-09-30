<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class cadastrarcontroller extends Controller
{
    public function cadastrar_usuario(){

       return view('cadastrar.create');
    }
   
     public function store(Request $request){

      //dd($request);
      $usuario = new User; 
    
      $usuario -> name = $request-> name;
      $usuario -> cpf = $request-> cpf;
      $usuario -> email = $request-> email;
      $usuario -> password = $request-> password;
      
      $usuario -> save();
      
     //if($usuario.uniqid){

        return redirect ('/cadastrar/create')->with('msg','Cadastro salvo com sucesso.');
     
   /// }else{

    // return redirect ('/cadastrar/create')->with('msg','Não foi possível realizar seu cadastro.'); 
     
 //  }

   }
 
}



