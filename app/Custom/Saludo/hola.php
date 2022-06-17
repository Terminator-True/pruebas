<?php
namespace App\Custom\Saludo;
use Exception;
use Symfony\Component\Process\Process;
class Hola
{
    public static function DiHola()
    {
        $process = new Process(["python","G:\laragon\www\pruebas\Scripts\hola.py"]);
        $process->run();
        return $process->getOutput();
    }
}

?>
