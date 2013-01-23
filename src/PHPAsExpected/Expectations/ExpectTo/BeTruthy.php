<?php
namespace PHPAsExpected\Expectations;

class ExpectTo_BeTruthy
{
    const FAILURE_MESSAGE = 'Expected {{subject}} to be truthy, but it wasn\'t.';
    const INVERTED_FAILURE_MESSAGE = 'Expected {{subject}} not to be truthy, but it was.';
    
    public function test($subject) {
        return !!$subject;
    }
}


