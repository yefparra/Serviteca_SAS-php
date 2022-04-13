@extends('layouts.include')
@section('content')
<h1>Demo base de datos</h1>
<a href="Terceros/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Cedula</th>
      <th scope="col">Direccion</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Empresa</th>
      <th scope="col">Rol</th>
      <th>  <form action="{{route('Terceros.index')}}" method="get" class="text-left">
      <div class="btn-group">                        
          <input type="text" class="from-control" name="texto" value="{{$texto}}" placeholder="Buscar por Nombre">
          <input type="submit" class="btn btn-primary " value="Buscar">                        
      </div>
  </form></th>
    </tr>
  </thead>
  <tbody>
    @if(count($terceros)<=0)
      <tr> 
        <td colspan="8">
            No hay resultados
        </td> 
    @else
    @foreach ($Terceros as $Tercero)
    <tr>
        <td>{{$terceros->idTerceros}}</td>
        <td>{{$terceros->Nombre}}</td>
        <td>{{$terceros->Apellido}}</td>
        <td>{{$terceros->Telefono}}</td>
        <td>{{$terceros->Cedula}}</td>
        <td>{{$terceros->Direccion}}</td>
        <td>{{$terceros->Correo}}</td>
        <td>{{$terceros->Contraseña}}</td>
        <td>{{$terceros->rol->Tipo_Rol}}</td>
        <td>
         <form action="{{ route('terceros.destroy',$terceros->id) }}" method="POST">
          <a href="/terceros/{{$terceros->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
{{$terceros->links()}}

@endsection