<?php

use PHPAsExpected\Expectations\Expectation;

foreach(array(
    'toBeTrue' => 'BeTrue',
    'toBeFalse' => 'BeFalse',
    'toBeNull' => 'BeNull'
) as $methodName => $className) {
    $fullClassName = "PHPAsExpected\\Expectations\\ExpectTo_$className";
    Expectation::register($methodName, $fullClassName);
}
