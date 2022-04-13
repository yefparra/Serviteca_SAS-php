@extends('layouts.include')
@section('content')
<div class="location">
            <div class="container">
                <div class="text-center">
                    <div class="">
                        <div class="location-form">
                            <form action="login">
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Nombres"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Apellidos"/>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Correo"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Dirección"/>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Telefono"/>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" placeholder="Contraseña"/>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" placeholder="Comfirmar Contraseña" />
                                </div>
                                <div>
                                    <!--aqui va la condicion id :3-->
                                    <a class="btn btn-custom" href="/index">Cancelar</a>
                                    <button class="btn btn-custom" type="submit">Registrarse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection