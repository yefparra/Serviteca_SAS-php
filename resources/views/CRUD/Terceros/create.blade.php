@extends('layouts.include')
@section('content')
<div class="location">
            <div class="container">
                <div class="text-center">
                    <div class="">
                        <div class="location-form">
                            <form action="{{ route('Terceros.store') }}" method="POST" >
                                @csrf
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Nombre" required="required" name="Nombre" />
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Apellido" required="required" name="Apellido" />
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Telefono" required="required" name="Telefono"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Cedula" required="required" name="Cedula"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Direccion" required="required" name="Direccion"/>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Correo" required="required" name="Correo"/>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" required="required" name="Contraseña"/>
                                </div>

                                <div>
                                   {{ Form::select('Rol_idRol', $roles, $terceros->Rol_idRol,['class' => 'form-control'. ($errors->has('Rol_idRol')? 'is-invalid' : ''), 'placeholder'=>'Seleciona el rol', 'name'=>'idRol'])}}
                                   {!! $errors->first('Selecciona el rol','<div class="invalid-feedback">:message</p>')!!}</div>       
                                <br>
                                <div>
                                <a class="btn btn-custom" href="/Terceros">Cancelar</a>
                                <button class="btn btn-custom" type="submit">Registrarse</button>
                                </div>   
                                </div>
                                <div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 