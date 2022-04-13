<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "Usuarios";
    protected $primaryKey = "id";
    protected $fillable = ['Nombre','Apellido','Edad','Telefono'];
    protected $hidden = ['id'];

    public function Cliente(){
        return $this->belongsToMany(Cliente::class);
    }

    public function Ticket_Servicio(){
        return $this->belongsToMany(Ticket_Servicio::class);
    }
}