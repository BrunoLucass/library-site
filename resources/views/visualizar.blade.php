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
    <div class="box">
        <legend><b>Visualizar dados</b></legend>
        <form action="" id="formulario">
            <fieldset>

                @foreach ($products as $products)
                    <p>Titulo: {{ $products->title }}</p>
                    <p>Autor: {{ $products->author }}</p>
                    <p>nome: {{ $products->name }}</p>
                    <p>Data: {{ $products->date }}</p>
                @endforeach

                <a href="{{ route('welcome') }}">
                    <button type="button" name="submit" id="submit" onClick="">Voltar</button>
                </a>

    </div>

    </fieldset>
    </form>
    </div>

    </fieldset>
    </form>
    </div>
</body>
<script>
    < /html>
