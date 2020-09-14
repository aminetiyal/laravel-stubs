<?php

namespace Aminetiyal\LaravelStubs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aminetiyal\LaravelStubs\Skeleton\SkeletonClass
 */
class LaravelStubsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-stubs';
    }
}
