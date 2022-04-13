<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "Rol";
    protected $primaryKey = "id";
    protected $fillable = ['tipo_rol'];
    protected $hidden = ['id'];

}
