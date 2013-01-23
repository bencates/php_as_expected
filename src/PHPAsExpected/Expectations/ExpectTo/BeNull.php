<?php
namespace PHPAsExpected\Expectations;

class ExpectTo_BeNull
{
    const FAILURE_MESSAGE = 'Expected {{subject}} to be null, but it wasn\'t.';
    const INVERTED_FAILURE_MESSAGE = 'Expected {{subject}} not to be null, but it was.';
    
    public function test($subject) {
        return is_null($subject);
    }
}


