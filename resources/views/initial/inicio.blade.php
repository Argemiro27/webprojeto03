<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schedz</title>
  <link rel="stylesheet" href="{{asset('css/initial/inicio.css')}}" />
</head>
<body>
  <header>
    <section>
      <picture>
        <img src="{{asset('img/logo/logo.png')}}" alt="Logo">
      </picture>
      <h1>Schedz</h1>
    </section>
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
      <a href="{{ url('/tarefa') }}" class="text-sm text-gray-700 underline">MINHA AGENDA</a>
      @else
      <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">LOGIN</a>
      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">CADASTRO</a>
      @endif
      @endauth
    </div>
    @endif
  </header>
  <main>
    <center>
    <h1>
      PÁGINA INICIAL
    </h1>
    <img src="{{asset('img/assistente/assistenteum.png')}}" alt="Assistente">
    <br></br>
    <h4>
    Bem vindo ao Schedz Desktop, a sua assistente criadora de agenda virtual :)!
    </h4>
    </center>
  </main>
</body>

</html>