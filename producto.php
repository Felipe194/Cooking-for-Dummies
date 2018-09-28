<?php
class producto
{
  var $nombre="";
  var $precio="";

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
$p1[0]=new producto();
$p1->setNombre("Lapiz");
$p1->setPrecio(50);
?>
