<?php

namespace Rashmitagangani\DatabaseSwitcher;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class DatabaseSwitcher
{
    protected $currentConnection;

    public function switchTo($connectionName)
    {
        if (config("database.connections.$connectionName")) {
            Config::set('database.default', $connectionName);
            DB::purge($connectionName);
            $this->currentConnection = $connectionName;
            return true;
        }
        return false;
    }

    public function getCurrentConnection()
    {
        return $this->currentConnection ?? config('database.default');
    }
}
