<?php
namespace PHPAsExpected\Expectations;

class ExpectTo_Match
{
    const FAILURE_MESSAGE = 'Expected {{subject}} to match {{arg1}}, but it didn\'t';
    const INVERTED_FAILURE_MESSAGE = 'Expected {{subject}} not to match {{arg1}}, but it did.';
    
    public function test($subject, $pattern) {
        return preg_match($pattern, $subject);
    }
}


