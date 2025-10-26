@extends('layouts.main')

 @section('title','Nossa grade de produtos')

 @section('content')

<div class="container-lg" > 

    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true" >
            <div class="carousel-inner" id="carousel-img">
                    <div class="carousel-item active" id="img-carousel">
                        <img src="/IMG/2.png" class="d-block w-100" alt="...">
                    </div>
                     <div class="carousel-item" id="img-carousel">
                        <img src="/IMG/loja.jpg" class="d-block w-100" alt="...">
                    </div>
                     <div class="carousel-item" id="img-carousel">
                        <img src="/IMG/loja2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" id="img-carousel">
                        <img src="/IMG/1.png" class="d-block w-100" alt="...">
                    </div> 
            </div>
          
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <div class="row" id="btn-loja">
        <div class="col-md-3 offset-md-9" >
            <a class="btn btn-warning" href="/">Voltar</a>
        </div>
    </div>

    <div class="container-lg" >  
        <div id="loja" class="col-md-12">

            <div class="container-lg">
                <p class="subtitulo">Lançamentos da semana</p>
                <hr>
            </div>

            <div id="cards-container" class="row" >
        
                @foreach($cadastrar_produtos as $produto)
            
                    <div class="card col-md-3">
                    <img src="/img/produtos/{{$produto->image}}" alt="" >
                        <div class="card-body">
                            <div class="card-title" id="font">
                                <h5>R$:{{$produto -> valor}}</h5>
                                <hr>

                            </div>
                        </div>
                    </div>
                
                @endforeach

            </div>

                <div class="row" id="btn-loja">
                    <div class="col-md-3 offset-md-9" >
                        <a class="btn btn-warning" href="/">Voltar</a>
                    </div>
                </div>
        </div>
    </div>

</div>

 @endsection