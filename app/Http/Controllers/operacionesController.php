<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operacionesController extends Controller
{
    public function triangulo(Request $request)
{
    $base = $request->b;
    $altura = $request->h;

    $area = ($base * $altura) / 2;

    return view("triangulo", compact('area'));
}

    public function prestamo(Request $request)
    {
        $presta=($request->capital*$request->tasa*$request->tiempo);
        return view("prestamo", compact('presta'));
        
    }

    public function monto(Request $request)
{
    $capital = $request->capital;
    $tasa = $request->tasa;
    $tiempo = $request->tiempo;

    $monto = $capital * (1 + $tasa) ** $tiempo;

    return view("monto", compact('monto'));
}

}
