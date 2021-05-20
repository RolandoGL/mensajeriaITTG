<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformaticoController extends Controller
{
    public function index(){
        return view('informatico.users');
    }
    public function crear(){
        return view('informatico.create');
    }
    public function editar(){
        return view('informatico.edit');
    }
    public function mostrar(){
        return view('informatico.show');
    }
}
