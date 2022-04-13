@extends('layouts.include')
@section('content')
<div class="location">
            <div class="container">
                <div class="text-center">
                    <div class="">
                        <div class="location-form">
                            <form action="/Rol" method="POST">
                                @csrf
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Tipo De Rol" required="required" name="Tipo_Rol" />
                                </div>
                                <div>
                                <a class="btn btn-custom" href="/Rol">Cancelar</a>
                                <button class="btn btn-custom" type="submit">Crear Rol </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection 