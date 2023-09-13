@extends("menu")
@section('content')
<h1>Monto de un préstamo</h1>
<form action="mon" method="post">
    @csrf
    Capital inicial: <input type="number" name="capital">
    Tasa de interés (porcentaje): <input type="text" name="tasa">
    Tiempo (en años): <input type="number" name="tiempo">
    <button type="submit" value="enviar">Calcular</button>
</form>

<h2>Monto del préstamo:
    @if (isset($monto))
        {{$monto}}
    @endif
</h2>

@endsection
