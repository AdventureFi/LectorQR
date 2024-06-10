<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;



class Controller
{
    public function welcome(Request $request){

        $persona=Persona::where('id_persona',$request->input('id_persona'))->first();
        return view('persona-qr', compact('persona'));
    }

    public function personabyqr($id_persona){
        $persona = Persona::with('curso')->where('id_persona', $id_persona)->first();
        Persona::with('','');

        return view('persona_show', compact('persona'));
    }
}

