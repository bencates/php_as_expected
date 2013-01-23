<?php

class ExpectTo_BeTruthyTest extends PHPUnit_Framework_TestCase
{
    function testTrueShouldPass() {
        expect(true)->toBeTruthy();
    }

    function testTruthyValuesShouldPass() {
        expect(1)->toBeTruthy();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testFalseShouldFail() {
        expect(false)->toBeTruthy();
    }
}

