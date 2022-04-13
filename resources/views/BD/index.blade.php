@extends('layouts.include')
@section('content')
<h1>Demo base de datos</h1>
<a href="BD/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Contraseña</th>
      <th>  <form action="{{route('BD.index')}}" method="get" class="text-left">
      <div class="btn-group">                        
          <input type="text" class="from-control" name="texto" value="{{$texto}}" placeholder="Buscar por nombre">
          <input type="submit" class="btn btn-primary " value="Buscar">                        
      </div>
  </form></th>
    </tr>
  </thead>
  <tbody>
    @if(count($usuarios)<=0)
      <tr> 
        <td colspan="8">
            No hay resultados
        </td> 
    @else
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->apellido}}</td>
        <td>{{$usuario->correo}}</td>
        <td>{{$usuario->direccion}}</td>
        <td>{{$usuario->telefono}}</td>
        <td>{{$usuario->contraseña}}</td>
        <td>
         <form action="{{ route('BD.destroy',$usuario->id) }}" method="POST">
          <a href="/BD/{{$usuario->id}}/edit" class="btn btn-info">Editar</a>         
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
{{$usuarios->links()}}

@endsection