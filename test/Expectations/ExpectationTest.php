<?php

use \PHPAsExpected\Expectations\Expectation;

class ExpectationTest extends PHPUnit_Framework_TestCase
{
    function setUp() {
        Expectation::register('toCallPassingTest', 'PassingTestExpectation');
        Expectation::register('toCallFailingTest', 'FailingTestExpectation');
    }

    function testExpectReturnsExpectation() {
        $expectation = expect(null);
        $this->assertInstanceOf('PHPAsExpected\Expectations\Expectation', $expectation);
    }

    function testNotReturnsExpectation() {
        $expectation = expect(null)->not;
        $this->assertInstanceOf('PHPAsExpected\Expectations\Expectation', $expectation);
    }

    /**
     * @expectedException Exception
     */
    function testThrowsExceptionIfTestNotDefined() {
        expect(null)->toChokeBecauseThisTestDoesntExist();
    }

    function testPassesIfTestReturnsTrue() {
        expect(null)->toCallPassingTest();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     * @expectedExceptionMessage normal failure message for foo with arg test
     */
    function testFailsIfTestReturnsFalse() {
        expect('foo')->toCallFailingTest('test');
    }

    function testPassesIfInvertedTestReturnsFalse() {
        expect(null)->not->toCallFailingTest();
    }

    /**
     * @expectedException PHPAsExpected\Expectations\ExpectationFailedException
     * @expectedExceptionMessage inverted failure message for bar with arg test
     */
    function testFailsIfInvertedTestReturnsTrue() {
        expect('bar')->not->toCallPassingTest('test');
    }
}
