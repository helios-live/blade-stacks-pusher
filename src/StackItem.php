<?php

namespace Ideatocode\BladeStacksPusher;

use Illuminate\View\View;

class StackItem
{
    protected $stack;
    protected $content;

    public function __construct($stack, $content)
    {
        $this->stack = $stack;
        $this->content = $content;
    }

    public function __toString()
    {
        $item = $this->content;

        if (is_callable($item)) {
            return $item();
        }

        if (is_object($item) && get_class($item) == View::class) {
            return $item->render();
        }

        return (string)$item;
    }
}
