<?php
use PHPUnit\Framework\TestCase;

use Krasho\AccessHandler;

class AccessHandlerTest extends TestCase
{
    public function test_grant_access()
    {
        $this->assertTrue(
            AccessHandler::check('admin')
        );
    }

    public function test_deny_access()
    {
        $this->assertFalse(
            AccessHandler::check('editor')
        );
    }
}