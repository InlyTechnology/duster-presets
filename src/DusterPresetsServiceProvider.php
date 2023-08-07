<?php

namespace Inly\DusterPresets;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DusterPresetsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('duster-presets');
    }

    public function bootingPackage()
    {
        $this->publishes([
            $this->package->basePath('/pint.json') => base_path(),
        ], "laravel-assets");
    }
}
