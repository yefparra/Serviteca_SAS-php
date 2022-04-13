@extends('layouts.include')
@section('content')
<div class="location" >
            <div class="container" >
                <div class="text-center" >
                    <div class="">
                        <div class="location-form">
                            <form action="index">
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Correo"/>
                                </div>
                                <div class="control-group">
                                    <input type="password" class="form-control" placeholder="Contraseña"/>
                                </div>
                                <div class="form-check text-left control-grup" style="color: #fff;">
                                    <input type="checkbox" class="form-check-input">
                                    <label>Recuerdame</label>
                                </div>
                                <div class="text-left">
                                    <a href="/register">¿No tienes cuenta?. ¡Crea una!</a>
                                </div>
                                <div class="text-left">
                                    <a href="/recuperar">¿Has olvidado tu contraseña?</a>
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