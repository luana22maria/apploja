@extends('layouts.main')

 @section('title','Novos produtos')

 @section('content')

<div class="container-lg">

 <h3>{{ $cadastrar_produtos->name_produto }}</h3>
 <hr>

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="imge-container" class="col-md-6">
              <img src="/IMG/produtos/{{ $cadastrar_produtos->image }} " class="img-fluid" alt="{{ $cadastrar_produtos->name_produto }}" width="450">
           </div>

           <div id="inf-container" class="col-md-5">
            <div class="card">
                <div class="card-header">
                    {{ $cadastrar_produtos->name_produto }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Especial da Semana - {{ $cadastrar_produtos->cor }}</h5>
                    <p class="card-text">{{ $cadastrar_produtos->descricao }}</p>
                </div>

                <div class="card-footer">
                     <p class="card-text"> R$: {{ $cadastrar_produtos->valor}}</p>
                </div>
                </div>
                    
                <div class="bnt_modelos">
                    <a type="button" href="/" class="btn btn-warning">Voltar</a>
                </div>
           </div>
        </div>
    </div> 
</div>

 @endsection