<?php
namespace PHPAsExpected\Expectations;

class ExpectTo_BeFalsy
{
    const FAILURE_MESSAGE = 'Expected {{subject}} to be falsy, but it wasn\'t.';
    const INVERTED_FAILURE_MESSAGE = 'Expected {{subject}} not to be falsy, but it was.';
    
    public function test($subject) {
        return !$subject;
    }
}


