<?php

namespace App\Facades;
use illuminate\Support\Facades\Facade;

class Cart extends Facade 
{
    public static function getFacadeAccessor()
    {
        return 'cart';
    }
}
