@extends('layouts.include')
@section('content')
<div class="location">
            <div class="container">
                <div class="text-center">
                    <div class="">
                        <div class="location-form">
                            <form action="/BD/{{$usuario->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Nombres" required="required" name="nombre" value="{{$usuario->nombre}}" />
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Apellidos" required="required" name="apellido" value="{{$usuario->apellido}}"/>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Correo" required="required" name="correo" value="{{$usuario->correo}}"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Dirección" required="required" name="direccion" value="{{$usuario->direccion}}"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Telefono" required="required" name="telefono" value="{{$usuario->telefono}}"/>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" required="required" name="contraseña" value="{{$usuario->contraseña}}"/>
                                </div>
                                <div>
                                <a class="btn btn-custom" href="/BD">Cancelar</a>
                                <button class="btn btn-custom" type="submit">Editar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 