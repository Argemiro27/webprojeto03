<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schedz</title>
  <link rel="stylesheet" href="{{ asset('css/logged/logged.css') }}">
</head>

<body>
  <header>
    <section>
      <picture>
        <img src="{{asset('img/logo/logo.png')}}" alt="Logo" />
      </picture>
    </section>
  </header>
  <nav>
    <ul>
      <li>
        <a href="{{url('/tarefa')}}">MINHA AGENDA</a>
      </li>
      <li>
        <a href="">BAIXE O NOSSO APP</a>
      </li>
      <li>
        <a href="">SOBRE</a>
      </li>
    </ul>
  </nav>
  <main>
    @yield('content')
  </main>
</body>

</html>