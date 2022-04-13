@extends('layouts.include')
@section('content')
<div class="location">
            <div class="container">
                <div class="text-center">
                    <div class="">
                        <div class="location-form">
                            <form action="/BD" method="POST">
                                @csrf
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Nombres" required="required" name="nombre" />
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Apellidos" required="required" name="apellido" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Correo" required="required" name="correo"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Dirección" required="required" name="direccion"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Telefono" required="required" name="telefono"/>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" required="required" name="contraseña"/>
                                </div>
                                <div>
                                <a class="btn btn-custom" href="/BD">Cancelar</a>
                                <button class="btn btn-custom" type="submit">Registrarse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 