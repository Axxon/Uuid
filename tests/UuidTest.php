<?php

namespace SilexFriends\Uuid\Tests;

use SilexFriends\Uuid\Uuid;
use PHPUnit_Framework_TestCase;
use Silex\Application;

/**
 * Uuid Test Case
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class UuidTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    private $app;

    /**
     * Bootstrap
     */
    public function setUp()
    {
        parent::setUp();

        $app = new Application;
        $app->register(new Uuid());

        $this->app = $app;
    }

    /**
     * Shutdown
     */
    public function tearDown()
    {
        $this->app = null;

        parent::tearDown();
    }

    /**
     * @test
     */
    public function generateUuidMustBeReturnNotEmpty()
    {
        $result = $this->app[Uuid::GENERATE]();

        $this->assertNotEmpty($result);
    }
}
