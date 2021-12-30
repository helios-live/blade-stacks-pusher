<?php

namespace Ideatocode\BladeStacksPusher;

class BladeStacksPusher
{

    public function push($stack, mixed $param)
    {
        $item = new StackItem($stack, $param);
        app('view')->startPush($stack, $item);
    }

    public function prepend($stack, mixed $param)
    {
        $item = new StackItem($stack, $param);
        app('view')->startPrepend($stack, $item);
    }
}
