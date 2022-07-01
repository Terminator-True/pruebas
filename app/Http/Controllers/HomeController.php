<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom\Saludo\Hola;
use Exception;
// use Illuminate\Support\Facades\Hola;
use Symfony\Component\Process\Process;


class HomeController extends Controller
{
    public function __invoke()
    {
        return view("home")->with('hola',Hola::DiHola()["value"]);
    }
}
