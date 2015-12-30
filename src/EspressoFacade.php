<?php namespace MkiLabs\Espresso;

use Illuminate\Support\Facades\Facade;

class EspressoFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'espresso';
    }
}