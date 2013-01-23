<?php
namespace PHPAsExpected\Expectations;

class ExpectTo_BeTrue
{
    const FAILURE_MESSAGE = 'Expected {{subject}} to be true, but it wasn\'t.';
    const INVERTED_FAILURE_MESSAGE = 'Expected {{subject}} not to be true, but it was.';
    
    public function test($subject) {
        return $subject === true;
    }
}


