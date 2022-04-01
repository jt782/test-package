<?php

namespace Jt782\TestPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jt782\TestPackage\TestPackage
 */
class TestPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test-package';
    }
}
