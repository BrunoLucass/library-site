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

                {{-- @foreach ($data_form as $data_form)
    <p>Nome: {{$data_form->name}}</p>
    <p>Email: {{$data_form->email}}</p>
    <p>Telefone: {{$data_form->telefone}}</p>
    <p>Genero: {{$data_form->genero}}</p>
    <p>Data de Nascimento: {{$data_form->data_nascimento}}</p>
    <p>Cidade: {{$data_form->cidade}}</p>
    <p>Estado: {{$data_form->estado}}</p>
    <p>Endereço: {{$data_form->endereco}}</p>
    @endforeach --}}

                <a href="{{ route('formulario') }}">
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
