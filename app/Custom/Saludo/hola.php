<?php
namespace App\Custom\Saludo;
use Exception;
use Symfony\Component\Process\Process;
class Hola
{
    //Crea un proceso externo a base de un script de python
    public static function DiHola()
    {
        try {
            $process = new Process(["C:\Python310\python.exe", "G:\laragon\www\pruebas\Scripts\hola.py"]);
            $process->mustRun();
            //"Timeout" hasta que el proceso acaba
            // while ($process->isRunning()) {
            // }
            return ["status"=>200,"value"=>$process->getOutput()];
        } catch (Exception $e) {
            return ["status"=>500,"value"=>$e];

        }

    }
}
?>
