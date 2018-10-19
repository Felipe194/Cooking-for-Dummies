<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modalidadMD extends Model
{
  public $timestamps=false;
  protected $table="modalidad";
  protected $fillable= array('tipo','entrada','entrada','segundo','bebida','postre');
}
