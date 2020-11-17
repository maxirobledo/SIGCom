<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class GestionSectoresController extends Controller
{
    public function registro(){
        return view('/gestionUsuarios/sectores/registroSector');
    }

    //Almacena los datos del formulario
    public function store( Request $request){
       $sector = new Sector();
       $sector->descripcion=$request->descripcion;
       $sector->persona_a_cargo=$request->percargo + 0;
       //Se guardan los datos en la BD
       $sector->save();
    }
}
