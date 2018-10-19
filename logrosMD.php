<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logrosMD extends Model
{
  public $timestamps=false;
  protected $table="logros";
  protected $fillable= array('participante','tipo','premio','logo');
}
