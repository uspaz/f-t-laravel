<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return 'Bienvenido al panel de cursos';
    }

    public function create(){
        return 'Agrega aquí tu curso';
    }

    public function show($curso){
        return "Bienvenido al curso de $curso";
    }
}
