<?php

namespace Inly\DusterPresets\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inly\DusterPresets\DusterPresets
 */
class DusterPresets extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Inly\DusterPresets\DusterPresets::class;
    }
}
