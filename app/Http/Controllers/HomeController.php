<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Saludo\Hola;
use Exception;
use Symfony\Component\Process\Process;


class HomeController extends Controller
{
    public function __invoke()
    {
        $hola=Hola::DiHola();
        dd($hola);
        return view("home")->with('hola',$hola);
    }
}
