<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <title>Lets</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])


    </head>
    <body>


        {{-- navbar  --}}

        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Lets</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Início</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar Livros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Ver Livros</a>
                </ul>
                {{-- <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
              </div>
            </div>
          </nav>

        {{-- home  --}}
       
            <br/>
            <div class="row">
                <div class="col-15">
                    <fieldset>
                        <hr>
                        <h1 class="text-center">Bem vindo ao Lets</h1>
                    <p class="text-center">Aqui você pode cadastrar, visualizar e editar os seus livros!</p>
                    <hr>
                    </fieldset>
                    <div class="d-grid gap-2 col-6 mx-auto">
                     <hr>
                        <a href="{{route('formulario')}}">

                            <button type="button" name="submit" id="submit" onClick="" >Cadastrar Livros</button>
                  
                            </a> 
                        <a href="{{route('visualizar')}}">

                            <button type="button" name="submit" id="submit" onClick="" >Visualizar Livros</button>
                  
                            </a> 
                      </div>
                </div>
          
       

       
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>
