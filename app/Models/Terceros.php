<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    protected $table = "Usuarios";
    protected $primaryKey = "id";
    protected $fillable = ['Nombre','Apellido','Telefono','Cedula','Direccion','Correo','contraseña','Rol_idRol'];
    protected $hidden = ['id'];

}
