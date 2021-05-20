<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        return view('revisor.messages');
    }
    public function redactar(){
        return view('revisor.create');
    }
    public function editar(){
        return view('revisor.edit');
    }
    public function mostrar(){
        return view('revisor.show');
    }
}
