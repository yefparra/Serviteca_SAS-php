@extends('layouts.include')
@section('content')

<div class="location" >
            <div class="container" >
                <div class="text-center" >
                    <div class="">
                        <div class="location-form">
                            <form action="index">
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Correo de su Cuenta"/>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" placeholder="Nueva Contraseña"/>
                                </div>
                                <div class="text-left">
                                    <a href="register">¿No tienes cuenta?. ¡Crea una!</a>
                                </div>
                                <div class="form-text location-item"></div>
                                <div>
                                    <a class="btn btn-custom" href="/index">Cancelar</a>
                                    <button class="btn btn-custom" type="submit">Iniciar Secion</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

