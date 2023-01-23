<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    

</head>

<body>

    {{-- formulario  --}}

    <div class="box">
        <form action="/update/{{ $products->id }}" method="POST" id="formulario">
            @csrf
            @method('PUT')
            <fieldset>
                <legend><b>Editando: {{ $products->title }}</b></legend>
                <br />
                
                <div class="inputBox">
                    <input type="text" name="title" id="title" class="inputUser" value="{{ $products->title }}" required />
                    <label for="title" class="labelInput">Titulo</label>
                </div>
                <br /><br />
                <div class="inputBox">
                    <input type="text" name="author" id="author" class="inputUser" value="{{ $products->author }}" required />
                    <label for="author" class="labelInput">Autor</label>
                </div>
                <br /><br />
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" value="{{ $products->name }}" required />
                    <label for="name" class="labelInput">Nome</label>
                </div>
                <br /><br />
                <label for="date"><b>Data de Entrada:</b></label>
                <input type="date" name="date" id="date" value="{{ $products->date }}" required />


                {{-- botoes  --}}

                <br /><br />

                <a href="{{ route('visualizar') }}">

                    <button type="submit" name="submit" id="submit" >Enviar</button>

                </a>

            </fieldset>
        </form>
</body>
<script>
    < /html>
