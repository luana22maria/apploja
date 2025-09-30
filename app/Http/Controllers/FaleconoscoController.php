<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Elogio;

class FaleconoscoController extends Controller
{
  public function store(Request $request){
    Elogio::create([
      'comentario' => $request->comentario,
      'categoria' => '', 
     ]); 

        return redirect ('/faleconosco/comentarios');

  }
  

    public function cadastrar_comentarios(){
        $elogios= Elogio::all();
  
           return view('faleconosco.comentarios',['elogios'=>$elogios]);

        
    }
}
