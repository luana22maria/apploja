 @extends('layouts.main')

 @section('title','Cadastro')

 @section('content')

<h2 class="paragrafo" > <i class="fa fa-paragraph" aria-hidden="true"></i> Novos Usuarios</h2>

<div class="container">
  <hr>   
     <form action="/cadastrar" method="POST">
          @csrf     {{-- diretiva do laravel para envio de formulário--}}    
        <div class="row justify-content-center" id="row">   
            <div class="col-sm-8">
                <div class="input-group flex-nowrap" id="input_group" >
                    <input type="text" class="form-control" name="name"  id="name" placeholder="Nome completo..." aria-label="Username" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap"  id="input_group" >
                    <input type="number" class="form-control" name="cpf" id="cpf" placeholder="Cpf..." aria-label="nome_produto" aria-describedby="addon-wrapping">
                </div> 

                <div class="input-group flex-nowrap" id="input_group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email completo..." aria-label="email" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap" id="input_group">
                    <input type="text" class="form-control" name="password" id="password"placeholder="digite sua senha..." aria-label="senha" aria-describedby="addon-wrapping">
                </div>

            </div>
             <div class="col-md-12 md-offset-2" id="btn">
               <input type="submit" class="btn btn-success" valeu="salvar">
               <a  href="/" type="button" class="btn btn-warning"> Voltar</a>
            </div>
         </div>    
         </form>

           <h2 class="paragrafo">Cadastra Novos Produtos.</h2>
           <hr>
        <form action="/cadastrar_produto" method="POST" enctype="multipart/form-data">
            @csrf
         <div class="row justify-content-center" id="row">     
            <div class="col-sm-8">
                <div class="input-group flex-nowrap"  id="input_group" >
                    <input type="text" class="form-control" name="name_produto" id="name_produto" placeholder="Produto..." aria-label="nome_produto" aria-describedby="addon-wrapping">
                </div>


                <div class="input-group flex-nowrap" id="input_group">
                    <input type="number" class="form-control" name="qnt"  id="qnt" placeholder="quantos produtos anexados..." aria-label="qnt" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap" id="input_group">
                    <input type="text" class="form-control" name="cor" id="cor" placeholder="Cor..." aria-label="cor" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap" id="input_group">
                    <input type="text" class="form-control" name="valor" id="valor" placeholder="Qual o valor do seu produto..." aria-label="valor" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap" id="input_group">
                    <textarea class="form-control" rows="4" cols="50" name="descricao" id="descricao" placeholder="Descreva o produto..." aria-label="descricao" aria-describedby="addon-wrapping"></textarea>
                </div>


                <div class="input-group flex-nowrap"  id="input_group" >
                     <input type="file" class="form-control-file" name="image" id="image"  aria-label="image" aria-describedby="addon-wrapping">
                </div>
              </div>

            

            <div class="col-md-10 md-offset-2" id="btn">
               <button type="submit" class="btn btn-success"> Salvar</button>
            </div>
        </div>
      </form>  
    </div>   
</div>

 



 @endsection