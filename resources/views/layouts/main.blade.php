<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Radesc</h1>
        <h2>Sistema de Gestão Escolar</h2>
    </header>
    
    @yield('content')

    <footer>
        <p>RADESC - Sistema de Gestão Escolar &copy; 2021</p>
    </footer>    
</body>
</html>