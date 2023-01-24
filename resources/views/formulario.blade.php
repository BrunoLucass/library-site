<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulário</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    @vite(['resources/css/page.css', 'resources/js/app.js'])

    

</head>

<body>

    {{-- formulario  --}}

    <div class="box">
        <form action="/products" method="POST" id="formulario">
            @csrf
            <fieldset>
                <legend><b>Fórmulário</b></legend>
                <br />
                
                <div class="inputBox">
                    <input type="text" name="title" id="title" class="inputUser" required />
                    <label for="title" class="labelInput">Titulo</label>
                </div>
                <br /><br />
                <div class="inputBox">
                    <input type="text" name="author" id="author" class="inputUser" required />
                    <label for="author" class="labelInput">Autor</label>
                </div>
                <br /><br />
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required />
                    <label for="name" class="labelInput">Nome</label>
                </div>
                <br /><br />
                <label for="date"><b>Data de Entrada:</b></label>
                <input type="date" name="date" id="date" required />


                {{-- botoes  --}}

                <br /><br />

                <a href="{{ route('welcome') }}">

                    <button type="submit" name="submit" id="submit" >Enviar</button>

                </a>

                <br /><br />

                <a href="{{ route('welcome') }}">

                    <button type="button" name="submit" id="submit" onClick="">Voltar</button>

                </a>

            </fieldset>
        </form>
</body>
<script>
    < /html>
