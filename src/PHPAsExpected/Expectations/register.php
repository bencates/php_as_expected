<?php

use PHPAsExpected\Expectations\Expectation;

foreach(array(
    'toBeTrue' => 'BeTrue',
    'toBeTruthy' => 'BeTruthy',
    'toBeFalse' => 'BeFalse',
    'toBeFalsy' => 'BeFalsy',
    'toBeNull' => 'BeNull',
    'toEqual' => 'Equal',
    'toBe' => 'Equal',
    'toMatch' => 'Match'
) as $methodName => $className) {
    $fullClassName = "PHPAsExpected\\Expectations\\ExpectTo_$className";
    Expectation::register($methodName, $fullClassName);
}
