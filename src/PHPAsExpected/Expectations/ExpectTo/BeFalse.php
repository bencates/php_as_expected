<?php
namespace PHPAsExpected\Expectations;

class ExpectTo_BeFalse
{
    const FAILURE_MESSAGE = 'Expected {{subject}} to be false, but it wasn\'t.';
    const INVERTED_FAILURE_MESSAGE = 'Expected {{subject}} not to be false, but it was.';
    
    public function test($subject) {
        return $subject === false;
    }
}


