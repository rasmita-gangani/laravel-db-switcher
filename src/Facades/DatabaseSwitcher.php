<?php

namespace Rashmitagangani\DatabaseSwitcher\Facades;

use Illuminate\Support\Facades\Facade;

class DatabaseSwitcher extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'db-switcher';
    }
}
