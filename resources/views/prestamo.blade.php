@extends("menu")
@section('content')
<h1>Calcular el interes de un prestamo</h1>
<form action="prestaC" method="post">
    @csrf
    capital:<input type="number" name="capital">
    tasa:<input type="double" name="tasa">
    tiempo:<input type="number" name="tiempo">
    <button type="submit" value="enviar">Enviar</button>


</form>

    <h2>Prestamo:
        @if (isset($presta))
            {{$presta}}
        @endif
    </h2>

@endsection