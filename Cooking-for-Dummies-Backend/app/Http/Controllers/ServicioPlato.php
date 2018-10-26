<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Configuration;


class ServicioPlato extends Controller
{
    public function ConsultarPlato()
    {
       $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/cookingfordummies-01-firebase-adminsdk-n3iqz-73f48396e9.json');
       $firebase = (new Factory)
       ->withServiceAccount($serviceAccount)
       ->withDatabaseUri('https://cookingfordummies-01.firebaseio.com/')
       ->create();
       $database = $firebase->getDatabase();
       $reference = $database->getReference('Servicios/Platos');
       $snapshot = $reference->getSnapshot();
       $value = $snapshot->getValue();
       echo $value['nombre']."     Tipo de plato: ".$value['tipo']." Precio:".$value['precio'];?><img src={{$value['foto']}} alt="" />
       <?php
       //return view('platos' , $value);
   }

   public function IngresarPlato()
    {
       $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/cookingfordummies-01-firebase-adminsdk-n3iqz-73f48396e9.json');
       $firebase = (new Factory)
       ->withServiceAccount($serviceAccount)
       ->withDatabaseUri('https://cookingfordummies-01.firebaseio.com/')
       ->create();
       $database = $firebase->getDatabase();
       $reference = $database->getReference('platos')
       ->push([
        'nombre' => $request->input('nombre') ,
        'foto' => $request->input('foto') ,
        'tipo' => $request->input('tipo') ,
        'precio' => $request->input('precio') ,
        ]);
        echo '<pre>'.'Ingreso Exitoso';
        print_r($newPost->getvalue());
   }
}
?>