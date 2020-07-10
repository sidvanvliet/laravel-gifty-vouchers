<?php

namespace Sidvanvliet\LaravelGiftyVouchers\Tests;

use Sidvanvliet\LaravelGiftyVouchers\LaravelGiftyVouchersServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelGiftyVouchersServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

    }
}
