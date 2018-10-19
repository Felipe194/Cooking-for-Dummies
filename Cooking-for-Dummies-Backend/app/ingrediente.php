<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingrediente extends Model
{
    public $timestamps = false;
    protected $fillable=['nombre','precio','tipo'];

}
