<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('recursos/styleEmisor.css') }}">
    <link rel="stylesheet" href="{{ asset('recursos/styleCreate.css') }}">
    <title>Bienvenido</title>
</head>
<body>
    
    <header class="header_container">
        <h1>Bienvenido al sistema de comunicación ITTG</h2>
        <nav class="navigation_container">
            <ul class="navigation_list  centerContent">
                <li class="navigation_list_item"> <a href="/tablero/Difusor" class="navigation_link">Inicio</a></li>
                <li class="navigation_list_item"> <a href="#" class="navigation_link">Mi perfil</a></li>
                <li class="navigation_list_item"> <a href="/" class="navigation_link">Salir</a></li>
            </ul>
        </nav>
    </header>
    <div class="rout">
         @yield('breadcumb')
    </div>
    <div class="mensajes">
    @yield('TableMessage')
    @yield('create')
    @yield('edit')
    </div>
</body>
</html>