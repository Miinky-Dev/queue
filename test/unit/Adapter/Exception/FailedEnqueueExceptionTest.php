<?php
namespace Graze\Queue\Adapter\Exception;

use Mockery as m;
use PHPUnit_Framework_TestCase as TestCase;

class FailedEnqueueExceptionTest extends TestCase
{
    public function setUp()
    {
        $this->adapter = m::mock('Graze\Queue\Adapter\AdapterInterface');
        $this->extra = ['foo' => 'bar'];

        $this->messageA = $a = m::mock('Graze\Queue\Message\MessageInterface');
        $this->messageB = $b = m::mock('Graze\Queue\Message\MessageInterface');
        $this->messageC = $c = m::mock('Graze\Queue\Message\MessageInterface');
        $this->messages = [$a, $b, $c];

        $this->exception = new FailedEnqueueException($this->adapter, $this->messages, $this->extra);
    }

    public function testInterface()
    {
        $this->assertInstanceOf('Graze\Queue\Adapter\Exception\AdapterException', $this->exception);
    }

    public function testGetAdapter()
    {
        $this->assertSame($this->adapter, $this->exception->getAdapter());
    }

    public function testGetExtra()
    {
        $this->assertSame($this->extra, $this->exception->getExtra());
    }

    public function testGetMessages()
    {
        $this->assertSame($this->messages, $this->exception->getMessages());
    }
}
