<?php

namespace Ideatocode\BladeStacksPusher;

class BladeStacksPusher
{
    protected static $table = [];

    public function push($stack, mixed $callback)
    {
        if (!isset(self::$table[$stack])) {
            $table = new Stack($stack);
            self::$table[$stack] = &$table;
            app('view')->startPush($stack, $table);
        }
        self::$table[$stack]->push($callback);
    }
}
