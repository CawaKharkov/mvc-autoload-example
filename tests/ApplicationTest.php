<?php

use CawaKharkov\Application\Application;

class ApplicationTest extends PHPUnit_Framework_TestCase
{

    protected $application;

    public function setUp()
    {
        $this->application = new Application();
    }

    public function tearDown()
    {
        unset($this->application);
    }

    public function testSomething()
    {
        // stub
        //$this->assertSame('foo', $this->application->getFoo());
    }

    /**
     * Test boot method
     */
    public function testBoot()
    {
        $this->assertTrue(true);
        $this->assertTrue(false);
    }
}
