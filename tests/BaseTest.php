<?php

namespace Railken\LaraOre\RequestLogger\Tests;

use Railken\Bag;

use Illuminate\Support\Facades\Route;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            \Railken\LaraOre\RequestLoggerServiceProvider::class,
        ];
    }

    /**
     * Setup the test environment.
     */
    public function setUp()
    {

        $dotenv = new \Dotenv\Dotenv(__DIR__.'/..', '.env');
        $dotenv->load();

        parent::setUp();

        Route::any('test', function () {
            return 'bazinga';
        })->middleware(\Railken\LaraOre\Http\Middleware\RequestLoggerMiddleware::class);


        $this->artisan('migrate:fresh');
        // $this->artisan('vendor:publish', ['--provider' => 'Railken\LaraOre\RequestLoggerServiceProvider', '--force' => true]);
        $this->artisan('migrate');

        !defined('LARAVEL_START') && define('LARAVEL_START', microtime(true));
    }
}
