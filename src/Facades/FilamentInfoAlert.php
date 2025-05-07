<?php

namespace Rectitudeopen\FilamentInfoAlert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rectitudeopen\FilamentInfoAlert\FilamentInfoAlert
 */
class FilamentInfoAlert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rectitudeopen\FilamentInfoAlert\FilamentInfoAlert::class;
    }
}
