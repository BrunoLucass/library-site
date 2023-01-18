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
      <form action="" id="formulario">
        <fieldset>
          <legend><b>Fórmulário</b></legend>
          <br />
          <div class="inputBox">
            <input
              type="text"
              name="nome"
              id="nome"
              class="inputUser"
              required
            />
            <label for="nome" class="labelInput">Nome completo</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="email"
              id="email"
              class="inputUser"
              required
            />
            <label for="email" class="labelInput">Email</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="tel"
              name="telefone"
              id="telefone"
              class="inputUser"
              required
            />
            <label for="telefone" class="labelInput">Telefone</label>
          </div>
          <p>Sexo:</p>
          <input
            type="radio"
            id="genero"
            name="genero"
            value="masculino"
            required
          />
          <label for="masculino">Masculino</label>
          <br />
          <input type="radio" id="genero" name="genero" value="outro" required />
          <label for="feminino">Feminino</label>
          <br />
          <input
            type="radio"
            id="genero"
            name="genero"
            value="feminino"
            required
          />
          <label for="outro">Outro</label>
          <br /><br />
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
          <input
            type="date"
            name="data_nascimento"
            id="data_nascimento"
            required
          />
          <br /><br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="cidade"
              id="cidade"
              class="inputUser"
              required
            />
            <label for="cidade" class="labelInput">Cidade</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="estado"
              id="estado"
              class="inputUser"
              required
            />
            <label for="estado" class="labelInput">Estado</label>
          </div>
          <br /><br />
          <div class="inputBox">
            <input
              type="text"
              name="endereco"
              id="endereco"
              class="inputUser"
              required
            />
            <label for="endereco" class="labelInput">Endereço</label>
          </div>
         
          <br /><br />

           <a href="{{route('welcome')}}">

          <button type="button" name="submit" id="submit" onClick="" >Enviar</button>

          </a> 

          <br /><br />

          <a href="{{route('welcome')}}">

            <button type="button" name="submit" id="submit" onClick="" >Voltar</button>
  
            </a> 

        </fieldset>
      </form>
    </body>
    <script>
</html>
