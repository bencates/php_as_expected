<?php

class ExpectTo_BeFalsyTest extends PHPUnit_Framework_TestCase
{
    function testFalseShouldPass() {
        expect(false)->toBeFalsy();
    }

    function testFalsyValuesShouldPass() {
        expect(0)->toBeFalsy();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testTrueShouldFail() {
        expect(true)->toBeFalsy();
    }
}

