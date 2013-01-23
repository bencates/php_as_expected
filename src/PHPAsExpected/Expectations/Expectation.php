<?php namespace PHPAsExpected\Expectations;

class Expectation
{
    protected $subject;
    protected $invert;

    protected static $_expectations = array();

    public static function register($name, $class) {
        self::$_expectations[$name] = $class;
    }

    public function __construct($subject, $invert = false) {
        $this->subject = $subject;
        $this->invert = $invert;
    }

    public function __get($name) {
        switch ($name) {
        case 'not':
            // return new self($this->subject, true);
            $this->invert = true;
            return $this;
        case 'expectedValue':
            return !$this->invert;
        }
    }

    public function __call($name, $args) {
        $class = $this->_getExpectationClass($name);
        return $this->_tryExpectation($class, $args);
    }

    protected function _tryExpectation($testClass, $args) {
        $value = call_user_func_array(
            array($testClass, 'test'),
            array_merge(array($this->subject), $args)
        );

        if ($this->expectedValue != $value) {
            throw $this->_getFailureException($testClass, $args);
        }
    }

    protected function _getExpectationClass($name) {
        if (array_key_exists($name, self::$_expectations)) {
            $className = self::$_expectations[$name];
            return new $className;
        } else {
            throw new \Exception("expectation '$name' is not defined");
        }
    }

    protected function _getFailureException($testClass, $args) {
        $message = new Utility\BuildMessage($testClass, $this->subject, $args, $this->invert);
        return new ExpectationFailedException($message);
    }
}
