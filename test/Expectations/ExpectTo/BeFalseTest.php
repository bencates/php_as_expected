<?php

class BeFalseTest extends PHPUnit_Framework_TestCase
{
    function testFalseShouldPass() {
        expect(false)->toBeFalse();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testTrueShouldFail() {
        expect(true)->toBeFalse();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testFalsyValuesShouldFail() {
        expect(0)->toBeFalse();
    }
}

