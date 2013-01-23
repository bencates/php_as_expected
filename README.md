# PHP As Expected

[PHP As Expected](http://bencates.github.com/php_as_expected) is a
[PHPUnit](www.phpunit.de) compatible assertion library.

## Usage

Either include `path/to/vendor/folder/PHPAsExpected/functions.php` or
add the following function to your `TestCase` base class:

```php
class My_TestCase extends PHPUnit_Framework_TestCase
{
    private function expect($subject)
    {
        return new PHPAsExpected\Expectations\Expectation($subject);
    } 
}
```

Then in your tests you can call `expect()` like so:

```php
class FooBarTest extends My_TestCase
{
    function testSomething()
    {
        // if included via functions.php
        expect(true)->toBeTrue();
    }

    function testSomethingElse()
    {
        // if included via class declaration
        $this->expect(2 + 2)->toEqual(4);
    }
}
```

## Supported Exceptions

* `toBeTrue()`
* `toBeFalse()`
* `toBeNull()`
