@extends('layouts.main')

@section('title','opiniões')

@section('content')

<div class="container-lg">
    <h3>Deixe sugestões e Elegios</h3>

  <hr>
   
     <!-- @foreach($elogios as $elogio)
     <p> {{$elogio->categoria}}, {{$elogio->comentario    }}</p>

    @endforeach -->

 <form action="/comentario" method="POST">
    @csrf
    <label for="inputcomentarios" class="form-label">Deixe seus elogios e Sugestões</label>
      <input type="textare" id="inputcomentarios" name="comentario" class="form-control" aria-describedby="passwordHelpBlock">
      <div id="passwordHelpBlock" class="form-text">
      </div>
   <div id="show_div">

   <div>
      <button type="submit" class="btn btn-primary">Salvar</button>
   </div>
  </form>
    
<div class="card-header">Comentários</div>

      <div id="minhadiv">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"><ion-icon id="icon" name="chatbubbles-outline"></ion-icon></th>
                <th scope="col"><ion-icon id="icon" name="calendar-number-outline"></ion-icon></th>
              </tr>
            </thead>
            
            <tbody>

            @foreach($elogios as $elogio)    
            <tr>
                <th scope="row"></th>
                <td id="comnt">{{$elogio->comentario}}</td>
                <td id="data">{{$elogio-> created_at}}</td>  
              </tr>
          @endforeach    
            </tbody>
          </table>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button id="mostrar"class="btn btn-primary " type="button">Mostar</button>
            <button  id="esconder" class="btn btn-primary" type="button">esconder</button>
      </div> 
  </div> 
</div>

@endsection