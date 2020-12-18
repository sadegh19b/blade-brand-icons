<?php

namespace Sadegh19b\BladeBrandIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeBrandIconsServiceProvider extends ServiceProvider
{
    private $iconsPath = 'vendor'.DIRECTORY_SEPARATOR.'simple-icons'.DIRECTORY_SEPARATOR.'simple-icons'.DIRECTORY_SEPARATOR.'icons';

    public function register()
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('brand-icons', [
                'path' => base_path($this->iconsPath),
                'prefix' => 'brand',
            ]);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                base_path($this->iconsPath) => public_path('vendor/blade-brand-icons'),
            ], 'blade-brand-icons');
        }
    }
}
