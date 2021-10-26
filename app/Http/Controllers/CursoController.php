<?php

namespace App\Http\Controllers;

use Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
       // $cursos= Cursos::all();

        return view('curso.index', compact('cursos'));
    }

    public function create(){
        return view('curso.create');
 
    }

    public function show($curso){
        return view('curso.show'['curso' =>$curso]);
 
    }

}
