<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlatoDP extends Controller
{

    function ConsultarPlatos()
    {
        $plato=\App\plato::all();// llama a todos los datos de la tabla
        foreach($plato as $row)
        {
          $nombre[]= $row->nombre;
          $foto[]= $row->foto;
          $tipo[]= $row->tipo;
          $precio[]=$row->precio;
          
        }
  $larr=count($plato);
return view('platos',['nombre'=>$nombre,'foto'=>$foto,'tipo'=>$tipo,'precio'=>$precio,'larr'=>$larr]);


    }

    function AgregarPlato(Request $request)
    {

      $NuevoPlato=new plato;// crear
      $NuevoPlato->nombre= $request->input('nombre');
      $NuevoPlato->foto= $request->input('foto');
      $NuevoPlato->tipo= $request->input('tipo');
      $NuevoPlato->precio= $request->input('precio');


      $NuevoPlato->save();

    }
    
    function ModificarPlato(Request $request,$pos)
    {

       $NuevoPlato= \App\plato::find($pos);  // Actualizar un registro 
       $NuevoPlato->nombre= $request->input('nombre');
       $NuevoPlato->foto= $request->input('foto');
       $NuevoPlato->tipo= $request->input('tipo');
       $NuevoPlato->precio= $request->input('precio');


      $NuevoPlato->save();

    }

}
