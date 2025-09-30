<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrar_produto;


class ProdutoController extends Controller
{
    public function index($id=null){ 
 
        return view('contato',['id'=>$id]);
    
    }

     public function produtos (){

       $cadastrar_produtos =cadastrar_produto::all();

     

       return view('produtos.produto_cadastrados', ['cadastrar_produtos'=> $cadastrar_produtos]);
  
                
    }


     public function store(Request $request){

      
      
       $cadastra_produto = new cadastrar_produto;

        $cadastra_produto -> name_produto = $request -> name_produto;
        $cadastra_produto -> quantidade = $request -> qnt;
        $cadastra_produto -> cor = $request -> cor;
    
      //upload de imgens

      if($request->hasFile('image')&& $request->file('image')->isvalid()){

        $requestImage = $request->image;
        $extensions = $requestImage->extension();

        $imagename= md5($requestImage->getClientOriginalName() . strtotime("now")) . ".". $extensions;
        
        $requestImage ->move(public_path('IMG/produtos'), $imagename);

        $cadastra_produto->image = $imagename;
        $cadastra_produto -> descricao = $request -> descricao; 
        $cadastra_produto -> valor = $request -> valor;
     }
     

       $cadastra_produto->save(); 

      

        return redirect ('/cadastrar/create')->with('msg','Produto Cadastro com sucesso.');

        
    }  
    

     public function show ($id){

       $cadastrar_produtos = cadastrar_produto::findOrFail($id);

    
       return view('produtos.cadastar_produto', ['cadastrar_produtos'=> $cadastrar_produtos]);
  
                
    }

}
