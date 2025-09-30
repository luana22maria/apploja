@extends('layouts.main')

@section('title',' Meu Site')

@section('content')

<div class="body-container">
<div class="container-sm">

    <div class="col-md-12" id="search-container">
      <h1>Busque um lançamento</h1>
      <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
      </form>
    </div>
  </div>
</div>


<div class="container-lg">
  <h3>Novos lançamentos</h3>
      <p class="subtitulo">Lançamentos da semana</p>
      <hr>
</div>


<div class="container-lg">

      <div id="lancamentos" class="col-md-12">
      
      <div id="cards-container" class="row">
   
        @foreach($cadastrar_produtos as $produto)
      
          <div class="card col-md-2 offset-md-1">
            <img src="/img/produtos/{{$produto->image}}" alt="" >
              <div class="card-body">
                <div class="card-title">
                    <h5>{{$produto -> name_produto}}</h5>
                </div>
                  <div class="card-date">
                    <p>Quantidade: <em> {{$produto -> quantidade}} &nbsp&nbsp Cor: {{$produto -> cor}}</em></p>
                      </div> 
                        <a href="/produtos/{{ $produto->id }}" class="btn btn-primary">saber mais </a>
                      </div>
                  </div>
        @endforeach
        </div>
      </div>
   </div> 
</div>

    

  
     
@endsection