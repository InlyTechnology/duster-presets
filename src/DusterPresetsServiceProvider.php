<?php

namespace Inly\DusterPresets;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Inly\DusterPresets\Commands\DusterPresetsCommand;

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
            ->name('duster-presets')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_duster-presets_table')
            ->hasCommand(DusterPresetsCommand::class);
    }
}
