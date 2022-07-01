<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * @return view la vista encontrada en ./resources/views/cursos/index.blade.php
     */
    public function index()
    {
        return file_get_contents("http://pruebas.test");
    }
    /**
     * @return view la vista encontrada en ./resources/views/cursos/create.blade.php
     */
    public function create()
    {
        return view("cursos.create");

    }
    /**
     * @param mixed $curso curso específico que se quiere mostrar
     * @return view la vista encontrada en ./resources/views/cursos/show.blade.php
     */
    public function show($curso)
    {
        return view("cursos.show",compact($curso));
    }
}
