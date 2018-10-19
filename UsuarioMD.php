<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioMD extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'nombre','contraseña', 'telefono', 'correo'];
    protected $table="usuarios";
}
