<?php

class ExpectTo_BeNullTest extends PHPUnit_Framework_TestCase
{
    function testNullShouldPass() {
        expect(null)->toBeNull();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testFalseShouldFail() {
        expect(false)->toBeNull();
    }
}

