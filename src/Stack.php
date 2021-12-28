<?php

namespace Ideatocode\BladeStacksPusher;

use Illuminate\View\View;

class Stack
{
    protected $stack;
    protected $list = [];
    public function __construct($stack)
    {
        $this->stack = $stack;
    }
    public function push(mixed $cb)
    {
        $this->list[] = $cb;
    }

    public function __toString()
    {
        $mapped = array_map(function ($item) {
            if (is_callable($item)) {
                return $item();
            }
            if (is_object($item) && get_class($item) == View::class) {
                return $item->render();
            }
            return (string)$item;
        }, $this->list);

        return implode($mapped);
    }
}
