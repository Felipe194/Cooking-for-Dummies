<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredienteDP extends Controller
{

    function ConsultarIngredientes()
    {
        $ingrediente=\App\ingrediente::all();// llama a todos los datos de la tabla
        foreach($ingrediente as $row)
        {
          $nombre[]= $row->nombre;
          $precio[]= $row->precio;
          $tipo[]= $row->tipo;
          
        }
  $larr=count($ingrediente);
return view('ingredientes',['nombre'=>$nombre,'precio'=>$precio,'tipo'=>$tipo,'larr'=>$larr]);


    }

    function AgregarIngrediente(Request $request)
    {

      $NuevoIngrediente=new ingrediente;// crear
      $NuevoIngrediente->nombre= $request->input('nombre');
      $NuevoIngrediente->precio= $request->input('precio');
      $NuevoIngrediente->tipo= $request->input('tipo');


      $NuevoIngrediente->save();

    }
    
    function ModificarIngrediente(Request $request,$pos)
    {

       $NuevoIngrediente= \App\ingrediente::find($pos);  // Actualizar un registro 
       $NuevoIngrediente->nombre= $request->input('nombre');
       $NuevoIngrediente->precio= $request->input('precio');
       $NuevoIngrediente->tipo= $request->input('tipo');


      $NuevoIngrediente->save();

    }
    

}
