<?php
namespace App\Http\Controllers;

use Request;

require 'ingredienteDP.php';
class CarroComprasDP extends Controller
{
  var $listaIngredientes;
  var $subtotal;
  var $iva;
  var $total;

  function setListaIngredientes($listaIngredientes)
  {
    $this->listaIngredientes=$listaIngredientes;
  }
  function getListaIngredientes()
  {
    return $this->listaIngredientes;
  }
  function setSubtotal($subtotal)
  {
    $this->subtotal=$subtotal;
  }
  function getSubtotal()
  {
    return $this->nombreTip;
  }
  function setIva($iva)
  {
    $this->$iva=$iva;
  }
  function getIva()
  {
    return $this->iva;
  }
  function setTotal($total)
  {
    $this->total=$total;
  }
  function getTotal()
  {
    return $this->total;
  }
  function obtenerProductos()
  {
    $ing[1]=new ingredienteDP();
    $ing[1]->setNombre("ARROZ");$ing[1]->setPrecio(23);
    $ing[2]=new ingredienteDP();
    $ing[2]->setNombre("SALSA DE TOMATE");$ing[2]->setPrecio(20);
    $ing[3]=new ingredienteDP();
    $ing[3]->setNombre("PAPAS");$ing[3]->setPrecio(10);

    $p=new CarroComprasDP();
    return $p->calcularSubtotal($ing);


  }
  function calcularSubtotal($listaProductos)
  {
    $texto="<H1>DETALLE DEL CARRITO DE COMPRAS</H1>";
    $sub=0;

    foreach ($listaProductos as $i => $prod) {
      $sub=$sub+$prod->getPrecio();
      $texto=$texto."<br/>Nombre: ".$prod->getNombre()."  Precio: ".$prod->getPrecio();
      }
      $p=new CarroComprasDP();
      $iv=$p->calcularIva($sub);
      $texto=$texto."<br/><br/>El subtotal es: ".$sub.
      "<br/>El iva es : ".$iv;

      $texto=$texto.$p->calcularTotal($iv,$sub);


    return $texto;

  }
  function calcularIva($subt)
  {
    return $subt*0.12;
  }
  function calcularTotal($iva,$subtotal)
  {
    return "<br/>El total de la compra es:  ".($iva+$subtotal);
  }
}
