<?php
include_once 'vendor/autoload.php';

class PassingTestExpectation
{
    const INVERTED_FAILURE_MESSAGE = 'inverted failure message for {{subject}} with arg {{arg1}}';
    public function test($subject) { return true; }
}

class FailingTestExpectation
{
    const FAILURE_MESSAGE = 'normal failure message for {{subject}} with arg {{arg1}}';
    public function test($subject) { return false; }
}
