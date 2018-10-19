<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecetaMD extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'nombre','ingredientes', 'descripcion'];
    protected $table="recetas";
}