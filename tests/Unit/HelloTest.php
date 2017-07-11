<?php

use Codeception\Test\Unit;

class UserTest extends Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testFindUser()
    {
        $this->tester->assertTrue(true);
    }
}