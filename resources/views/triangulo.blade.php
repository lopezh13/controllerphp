@extends("menu")
@section('content')
<h1>Área de un triángulo</h1>
<form action="tri" method="post">
    @csrf
    Valor de la base (b): <input type="number" name="b">
    Valor de la altura (h): <input type="number" name="h">
    <button type="submit" value="enviar">Calcular</button>
</form>

<h2>Área:
    @if (isset($area))
        {{$area}}
    @endif
</h2>

@endsection
