<?php

namespace Lazean214\Ecommerce\Tests;

use Orchestra\Testbench\TestCase;
use Lazean214\Ecommerce\EcommerceServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [EcommerceServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
