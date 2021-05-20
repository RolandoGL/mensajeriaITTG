<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmisorController extends Controller
{
    public function index(){
        return view('emisor.messages');
    }
    public function redactar(){
        return view('emisor.create');
    }
    public function editar(){
        return view('emisor.edit');
    }
    public function mostrar(){
        return view('emisor.show');
    }
}
