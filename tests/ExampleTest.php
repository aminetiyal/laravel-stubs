<?php

namespace Aminetiyal\LaravelStubs\Tests;

use Orchestra\Testbench\TestCase;
use Aminetiyal\LaravelStubs\LaravelStubsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelStubsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
