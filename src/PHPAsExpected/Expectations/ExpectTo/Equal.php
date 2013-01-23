<?php
namespace PHPAsExpected\Expectations;

class ExpectTo_Equal
{
    const FAILURE_MESSAGE = 'Expected {{subject}} to equal {{arg1}}, but it didn\'t';
    const INVERTED_FAILURE_MESSAGE = 'Expected {{subject}} not to equal {{arg1}}, but it did.';
    
    public function test($subject, $object) {
        return $subject === $object;
    }
}


