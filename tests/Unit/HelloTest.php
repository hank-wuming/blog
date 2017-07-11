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
        $this->tester->seeInDatabase('users', ['name' => 'Hank']);
        $this->tester->assertTrue(true);
    }
}