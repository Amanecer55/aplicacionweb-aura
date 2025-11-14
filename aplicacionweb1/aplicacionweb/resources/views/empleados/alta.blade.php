@extends('principal')

@section('contenido')
<h1>Alta de empleado</h1>
<br>
<form action = "{{route('guardaempleado')}}" method = "post">
{{csrf_field()}}
<table>
<tr>
     <td>Clave</td>
    <td>
        @if($errors->first('idemp'))
        {{$errors->first('idemp')}}
        @endif
    <input type = 'text' name = 'idemp'  class="form-control" value="{{old('idemp')}}"></td>
</tr>
<tr>
     <td>Nombre</td>
    <td>
        @if($errors->first('nombre'))
        {{$errors->first('nombre')}}
        @endif
    <input type = 'text' name = 'nombre'  class="form-control" value="{{old('nombre')}}"></td>
</tr>
<tr>
     <td>Apellido </td>
    <td>
         @if($errors->first('apellido'))
        {{$errors->first('apellido')}}
        @endif
        <input type = 'text' name = 'apellido' class="form-control" value="{{old('apellido')}}"></td>
</tr>
<tr>
     <td>Edad </td>
    <td>
         @if($errors->first('edad'))
        {{$errors->first('edad')}}
        @endif
        <input type = 'text' name = 'edad' class="form-control" value="{{old('edad')}}"></td>
</tr>
<tr>
     <td>Correo </td>
    <td>
         @if($errors->first('correo'))
        {{$errors->first('correo')}}
        @endif
        <input type = 'text' name = 'correo' class="form-control"  value="{{old('correo')}}"></td>
</tr>
<tr>
     <td>Fecha nacimiento </td>
    <td><input type = 'date' name = 'fechanac' class="form-control"></td>
</tr>

<tr>
     <td>RFC </td>
    <td>
        @if($errors->first('rfc'))
        {{$errors->first('rfc')}}
        @endif
    <input type = 'text' name = 'rfc' class="form-control" value="{{old('rfc')}}"></td>
</tr>
<tr>
     <td>Selecciona carrera</td>
    <td><select name = 'idca' class="form-select" >
        @foreach($carreras as $c)
        <option value = '{{$c->idca}}'>{{$c->nombre}}</option>
        @endforeach
        </select>
    </td>
</tr>
<tr>
     <td>Sexo</td>
     <td><input type = 'radio'  class="form-check-input" name = 'sexo' value = 'M'>Masculino
         <input type = 'radio'  class="form-check-input" name = 'sexo' value = 'F'>Femenino
     </td>
</tr>

<tr>
     <td>Curriculum</td>
    <td><textarea name = 'curriculum' class="form-control" >
        </textarea></td>
</tr>
<tr>
     <td>Activo</td>
     <td><input type = 'radio' class="form-check-input" name = 'activo' value = 'Si' cheked>Si
         <input type = 'radio' class="form-check-input" name = 'activo' value = 'No'>No
     </td>
</tr>
<tr>
    <td colspan= 2>
    <input type = 'submit' class="btn btn-success" value = 'Guardar'>
</td></tr>
</table></form>
@stop
