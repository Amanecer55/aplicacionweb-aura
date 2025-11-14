@extends('principal')

@section('contenido')
<center>
<h1> Reporte de empleados </h1>
<br>

<table  border= 1>
    <tr><td>Clave</td>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Carrera</td>
        <td>RFC</td>
    </tr>
    @foreach($empleados  as $e)
    <tr><td>{{$e->idemp}}</td>
        <td>{{$e->nomcompleto}}</td>
        <td>{{$e->correo}}</td>
        <td>{{$e->carre}}</td>
        <td>{{$e->rfc}}</td>
    </tr>
    @endforeach
</table></center>
@stop