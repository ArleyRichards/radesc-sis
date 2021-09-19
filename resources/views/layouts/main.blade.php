<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Fontes do Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">    
    
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--CSS da aplicação-->
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo-b2b.png" alt="Radesc" id="logo">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Controle de Acesso</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Relatórios</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Processos</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h1>Radesc</h1>
        <h2>Sistema de Gestão Escolar</h2>
    </header>
    
    @yield('content')

    <footer>
        <p>RADESC - Sistema de Gestão Escolar &copy; 2021</p>
    </footer>    
</body>
</html>