@extends('layouts.include')
@section('content')
<div class="location">
            <div class="container">
                <div class="text-center">
                    <div class="">
                        <div class="location-form">
                            <form action="/Rol/{{$rol->idRol}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Tipo De Rol" required="required" name="Tipo_Rol" value="{{$rol->Tipo_Rol}}" />
                                </div>
                                <div>
                                <a class="btn btn-custom" href="/Rol">Cancelar</a>
                                <button class="btn btn-custom" type="submit">Editar Rol</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection