<?php

class ExpectTo_MatchTest extends PHPUnit_Framework_TestCase
{
    function testMatchingRegexesShouldPass() {
        expect('foo bar')->toMatch('/^foo/');
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     */
    function testNonMatchingRegexesShouldFail() {
        expect('foo bar')->toMatch('/baz$/');
    }
}

