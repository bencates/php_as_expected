<?php

class ExpectTo_EqualTest extends PHPUnit_Framework_TestCase
{
    function testEqualValuesShouldPass() {
        expect(1)->toEqual(1);
    }

    function testEqualAliasedAsBe() {
        expect(1)->toBe(1);
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testUnequalValuesShouldFail() {
        expect(1)->toEqual(2);
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testEquivalentValuesShouldFail() {
        expect(1)->toEqual('1');
    }
}

