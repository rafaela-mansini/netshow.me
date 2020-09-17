<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoas;

class PaginasController extends Controller
{
    public function index(){
        $pessoas = Pessoas::paginate(20);
        return view('home', compact('pessoas'));
    }
    public function cadastro(){
        return view('cadastro');
    }
}
