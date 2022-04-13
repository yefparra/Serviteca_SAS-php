@extends('layouts.include')
@section('content')
<h1>Index</h1>
<a href="Rol/create" class="btn btn-primary">CREAR</a>
<table class="table table-dark table-striped mt-4">
  <thead>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tipo De Rol</th>
      <th scope="col">Opciones</th>
      <th>  <form action="{{route('Rol.index')}}" method="get" class="text-left">
  </form></th>
    </tr>
  </thead>
  <tbody>
    @if(count($roles)<=0)
      <tr> 
        <td colspan="8">
            No hay resultados
        </td> 
    @else
    @foreach ($roles as $Rol)
    <tr>
        <td>{{$Rol->idRol}}</td>
        <td>{{$Rol->Tipo_Rol}}</td>
        <td>
         <form action="{{ route('Rol.destroy',$Rol->idRol) }}" method="POST">
          <a href="/Rol/{{$Rol->idRol}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>          
        </td>        
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection