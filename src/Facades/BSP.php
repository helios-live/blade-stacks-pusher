<?php

namespace Ideatocode\BladeStacksPusher\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ideatocode\BladeStacksPusher\BladeStacksPusher
 */
class BSP extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'blade-stacks-pusher';
    }
}
