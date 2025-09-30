<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Blade layout -->

    <link rel="icon" href="{{ asset('favicon.ico') }}">



    <!-- google font -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
   
   <!-- bootstrap5 -->
    <link rel="stylesheet" href="/bootstrap-5/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- CSS E JS -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/CSS/style_cadatro.css">
    <link rel="stylesheet" href="/CSS/style_loja.css">
     <link rel="stylesheet" href="/CSS/style_comentarios.css">
    
 
</head>
    <body>
        <header>

           <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a href="/">
                      <img src="/img/astronalta.jpg" alt="astronalta">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" id="navbar">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        <a class="nav-link" aria-current="page" href="/produtos/produto_cadastrados">Produtos</a>
                        <a class="nav-link" aria-current="page" href="/cadastrar/create">Cadastrar</a>
                       <a class="nav-link" aria-current="page" href="/faleconosco/comentarios">Fale Conosco</a>
                    </div>
                    </div>
                </div>
            </nav>        
        </header>
     <main> 
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                   <div class="alert alert-success" role="alert" id="msg">{{session('msg')}}</p>

                    @else(<div class="alert alert-danger" role="alert" id="msg">{{session('msg')}}</p>) 
               
                 @endif
            </div>
        </div>
     </main>  

     @yield('content')  
    
        <footer>
            <p>Loja Online <ion-icon name="wifi-outline"></ion-icon>&nbsp; &copy;&nbsp; <label id="mostra_data"></label><label id="hora"></label></p>
        </footer>
         
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   
    <script src="/js/script.js"></script> 
    </body>
