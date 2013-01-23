<?php
namespace PHPAsExpected\Expectations\Utility;

class BuildMessage
{
    public function __construct($testClass, $subject, $args, $invert = false) {
        $this->testClass = $testClass;
        $this->testSubject = $subject;
        $this->testArgs = $args;
        $this->invert = $invert;
    }

    public function __toString() {
        return $this->buildMessage();
    }

    protected function buildMessage() {
        $m = new \Mustache_Engine;
        return $m->render($this->getBaseMessage(), $this->getTemplateData());
    }

    protected function getBaseMessage() {
        $testClass = $this->testClass;
        return $this->invert
            ? $testClass::INVERTED_FAILURE_MESSAGE
            : $testClass::FAILURE_MESSAGE;
    }

    protected function getTemplateData() {
        $templateData = array('subject' => print_r($this->testSubject, true));
        foreach($this->testArgs as $i => $arg) {
            $templateData['arg' . ($i+1)] = print_r($arg, true);
        }
        return $templateData;
    }
}
