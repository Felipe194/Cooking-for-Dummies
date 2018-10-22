<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carroComprasMD extends Model
{
  public $timestamps=false;
  protected $table="carroCompras";
  protected $fillable=array('subtotal','iva','total');
}
