
@extends('layouts.main')

@section('title','Produtos em Destaque')

@section('content')


    <h1>tela de Contatos</h1>

     @if($id != null)
          <p>produto selecionado: {{$id}}</p>

     @else <p>Nada informado.</p>
     
     @endif
        
    <a href="/"> Voltar ao inicio</a>

@endsection