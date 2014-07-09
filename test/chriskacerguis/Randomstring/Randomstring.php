<?php

namespace chriskacerguis\Randomstring\Test;

class RandomstringTest extends \PHPUnit_Framework_TestCase
{
    public $config;

    public function setUp()
    {
        // No setup needed
    }

    public function tearDown()
    {
        // No tear down needed
    }

    public function testGenerateRandomString()
    {
        $random     = new \chriskacerguis\Randomstring\Randomstring();
        $string     = $random->generate(11);
        $resource   = is_string($string);
        $this->assertTrue($resource);
    }    

}
