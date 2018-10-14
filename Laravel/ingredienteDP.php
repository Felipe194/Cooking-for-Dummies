<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingredienteDP extends Controller
{
    var $nombre="";
    var $precio=0;

    function setNombre($nombre)
    {
      $this->nombre=$nombre;
    }
    function getNombre()
    {
      return $this->nombre;
    }
    function setPrecio($precio)
    {
      $this->precio=$precio;
    }
    function getPrecio()
    {
      return $this->precio;
    }


}
