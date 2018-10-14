<?php

namespace App\Http\Controllers;

use Request;

class TipsDP extends Controller
{
    var $nombreTip="";
    var $textoTip="";

    function setNombreTip($nombreTip)
    {
      $this->nombreTip=$nombreTip;
    }
    function getNombreTip()
    {
      return $this->nombreTip;
    }
    function setTextoTip($textoTip)
    {
      $this->textoTip=$textoTip;
    }
    function getTextoTip()
    {
      return $this->textoTip;
    }

    public function obtenerTips()
    {
      $numeroTip=Request::input('numero');
      

      $p1[1]=new TipsDP();
      $p1[1]->setNombreTip("Cuanto más grande, menos fuego");
      $p1[1]->setTextoTip("Cuanto mayor sea la preparación que debes cocinar, más bajo
                          <br/>debes poner el fuego para una mejor cocción. Y viceversa,
                          <br/>cuando la preparación sea pequeña, podrás cocinarla a fuego
                          <br/>fuerte.");
      $p1[2]=new TipsDP();
      $p1[2]->setNombreTip("Almacena bien las especias");
      $p1[2]->setTextoTip("El mejor lugar para guardar las especias es un lugar que sea seco
                          <br/>y oscuro. Algunas personas tienden a guardar las especias justo
                          <br/> arriba de la estufa, pues este es el peor lugar en el que puedes
                          <br/>almacenarlas.");
      $p1[3]=new TipsDP();
      $p1[3]->setNombreTip("Cuchillos");
      $p1[3]->setTextoTip("Es necesario que tengas los cuchillos bien afilados para que
                          <br/>puedas hacer unos cortes perfectos a tus alimentos. Pero
                          <br/>ten cuidado de no cortarte.");

      return  "Tip # ".$numeroTip."<br/>".$p1[$numeroTip]->getNombreTip()."<br/>".$p1[$numeroTip]->getTextoTip();
    }


}
