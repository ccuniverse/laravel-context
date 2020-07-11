<?php

use PHPUnit\Framework\TestCase;
use Talk\Context\Context;

class ContextTest extends TestCase
{
    /**
     * @var Context
     */
    private $context;

    protected function setUp(): void
    {
        $this->context = Context::create();
    }

    public function testAllPassed()
    {
        Context::macro('get_foo', function () {
            return 'foo';
        });

        $this->context::set('name', 'context');
        $this->assertEquals($this->context::get('name'), 'context');

        $this->context::set('age', 20);
        $this->assertTrue($this->context::has('age'));

        $this->assertEquals($this->context::all(), [
            'name' => 'context',
            'age'  => 20,
        ]);

        $this->assertEquals('foo', $this->context::get_foo());
    }
}
