<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentInfoAlert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentInfoAlert\FilamentInfoAlert
 */
class FilamentInfoAlert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentInfoAlert\FilamentInfoAlert::class;
    }
}
