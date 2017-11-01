<?php

namespace Ridrog\AdminLteLogviewer\Test;

use Illuminate\Support\ServiceProvider;
use Ridrog\AdminLteLogviewer\LogviewerServiceProvider;
use Ridrog\AdminLteLogviewer\Test\TestCase as TestCase;

class ServiceProviderTest extends TestCase
{

    /**
     *
     * @var LogviewerServiceProvider
     */
    private $provider;

    /**
     * Setup
     */
    public function setUp()
    {
        parent::setUp();

        $this->provider = $this->app->getProvider(LogviewerServiceProvider::class);

    }

    /**
     * Tear Down
     */
    public function tearDown()
    {
        unset($this->provider);

        parent::tearDown();
    }

    /** @test */
    public function it_can_be_instantiated()
    {
        $expectations = [
             \Illuminate\Support\ServiceProvider::class,
            LogviewerServiceProvider::class
        ];

        foreach ($expectations as $expected) {
            $this->assertInstanceOf($expected, $this->provider);
        }
    }

}