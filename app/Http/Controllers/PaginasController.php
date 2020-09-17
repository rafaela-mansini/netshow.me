<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
        return view('home');
    }
    public function cadastro(){
        return view('cadastro');
    }
}
