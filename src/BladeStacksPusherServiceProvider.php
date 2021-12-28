<?php

namespace Ideatocode\BladeStacksPusher;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class BladeStacksPusherServiceProvider extends ServiceProvider
{
    public function register()
    {
        App::bind('blade-stacks-pusher', function () {
            return new BladeStacksPusher;
        });
    }
}
