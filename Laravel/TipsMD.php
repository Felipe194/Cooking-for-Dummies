<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipsMD extends Model
{
  public $timestamps=false;
  protected $table="tips";
  protected $fillable=array('nombre','texto');
}
