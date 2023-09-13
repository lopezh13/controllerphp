<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Examen1</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li><a href="{{route('triangulo')}}">triangulo</a></li>
            <li><a href="{{route('prestamo')}}">interes</a></li>
            <li><a href="{{route('monto')}}">prestamo</a></li>
        </ul>
    </div>
    @yield('content')
    
</body>
</html>