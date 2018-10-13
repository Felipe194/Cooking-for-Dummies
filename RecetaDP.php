<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecetaMD;

class recetaDP extends Controller
{
  public function getRecipe()//Return all the Recipes from Database
  {
    return \App\RecetaMD::all();
  }
  public function findRecipe($id)//Find an especific Recipe from Database
  {
    return \App\RecetaMD::find($id);
  }
  public function saveRecipe(Request $request)//Save and store a new Recipe in Database
  {
    return \App\RecetaMD::create($request->all());
  }
  public function updateRecipe(Request $request, $id)//Update a Recipe in Database, based in an especific parameter and Id
  {
    $registro=\App\RecetaMD::findOrFail($id);
    $registro->update($request->all());  

    return $registro;
  }
}
?>