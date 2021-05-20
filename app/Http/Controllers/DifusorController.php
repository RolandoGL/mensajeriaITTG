<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DifusorController extends Controller
{
    public function index(){
        return view('difusor.messages');
    }
    public function redactar(){
        return view('difusor.create');
    }
    public function editar(){
        return view('difusor.edit');
    }
    public function mostrar(){
        return view('difusor.show');
    }
}
