<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptorController extends Controller
{
    public function index(){
        return view('receptor.messages');
    }
    public function show(){
        return view('receptor.messages');
    }
}
