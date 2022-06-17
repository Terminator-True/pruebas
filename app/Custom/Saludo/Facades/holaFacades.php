<?php
namespace App\Custom\Saludo\Facades;
use Illuminate\Support\Facades\Facade;
use Symfony\Component\Process\Process;

class HolaFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'hola';
    }
}

?>
