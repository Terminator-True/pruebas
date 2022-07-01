<?php
namespace App\Custom\Saludo\Facades;
use Illuminate\Support\Facades\Facade;

class HolaFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'hola';
    }
}

?>
