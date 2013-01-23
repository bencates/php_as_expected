<?php

use PHPAsExpected\Expectations\Expectation;

function expect($subject) {
    return new Expectation($subject);
}


