<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <title>Formulário</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    @vite(['resources/css/page.css', 'resources/js/app.js'])

</head>

<body>
    <div class="box">
        <legend><b>Visualizar dados</b></legend>
        <form action="" id="formulario">
            <fieldset>

                @foreach ($products as $products)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td>Titulo: {{ $products->title }} | Autor: {{ $products->author }}
                            | Nome: {{ $products->name }} | Data: {{ $products->date }}</td>

                        <td>
                            <a class='btn btn-info edit-btn'href="/edit/{{ $products->id }}">
                                <ion-icon name="create-outline"></ion-icon> Editar
                            </a>
                            <form action="/formulario/{{ $products->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon> Deletar</button>

                            </form>
                        </td>
                    </tr>

                    <hr>
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
