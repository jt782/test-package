<?php

namespace Jt782\TestPackage;

use Jt782\TestPackage\Commands\TestPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TestPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('test-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_test-package_table')
            ->hasCommand(TestPackageCommand::class);
    }
}
