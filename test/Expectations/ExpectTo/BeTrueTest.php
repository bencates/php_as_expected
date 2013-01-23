<?php

class ExpectTo_BeTrueTest extends PHPUnit_Framework_TestCase
{
    function testTrueShouldPass() {
        expect(true)->toBeTrue();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testFalseShouldFail() {
        expect(false)->toBeTrue();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testTruthyValuesShouldFail() {
        expect(1)->toBeTrue();
    }
}

