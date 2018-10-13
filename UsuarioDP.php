<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuarioMD;

class usuarioDP extends Controller
{
  public function getUsers()//Return all the users from Database
  {
    return \App\UsuarioMD::all();
  }
  public function findUser ($id)//Find an especific user from Database
  {
    return \App\UsuarioMD::find($id);
  }
  public function saveUser(Request $request)//Save and store a new user in Database
  {
    return \App\UsuarioMD::create($request->all());
  }
  public function updateUser(Request $request, $id)//Update an user in Database, based in an especific parameter and Id
  {
    $registro=\App\UsuarioMD::findOrFail($id);
    $registro->update($request->all());  

    return $registro;
  }

}
?>
