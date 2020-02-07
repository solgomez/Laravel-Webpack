
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mujeres seguras</title>
    <link rel="icon" type="image/png" href="{{ url('images/favicon.png') }}">
	<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet"/>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130624596-37');
    </script>
</head>
<body> 
    <div id="app" class="wrapper">
        @include('layouts.header')
        <section class="wrapper-content fill-container">
            <main class="content">
            @yield('content')
            </main>
        </section>      
        @include('layouts.footer')
    </div>
<script src="{{  URL::asset('js/app.js') }}"></script>
</body>
</html>
