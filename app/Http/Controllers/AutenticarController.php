<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticarController extends Controller
{
    public function validar(Request $request){
        //hola
        $usuario = $request->input('usuario');
        $password = $request->input('password');
        if($usuario == "Emisor" & $password == "admin1")
            return view('emisor.messages');
        else if($usuario == "Revisor" & $password == "admin1")
            return view('revisor.messages');
        else if($usuario == "Difusor" & $password == "admin1")
            return view('difusor.messages');
        else if($usuario == "Informatico" & $password == "admin1")
        return view('informatico.users');
        else if($usuario == "Receptor" & $password == "admin1")
            return view('receptor.messages');
    }
}
