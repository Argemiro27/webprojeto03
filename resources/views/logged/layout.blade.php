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
      @endauth
    </div>
    @endif
  </header>
  <main>
    <center>
    <h1>
      MINHA AGENDA
    </h1>
    <br></br>
    <table class="demo" style="border: 3px #000 solid">
	    <thead>
	    <tr >
		    <th style="border: 3px #000 solid">Tarefa</th>
		    <th style="border: 3px #000 solid">Data</th>
		    <th style="border: 3px #000 solid">Descrição</th>
	    </tr>
	    </thead>
	    <tbody>
	    <tr>
		    <td></td>
		    <td><br></td>
		    <td></td>
	    </tr>
	    <tbody>
    </table>
    </center>
    @yield('content')
  </main>
</body>

</html>