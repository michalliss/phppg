<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once('hello.php');

final class HelloTest extends TestCase
{
    public function testHello(): void
    {
        $name = ' michal';
        $result = hello($name);
        $this->assertSame($result, "hello michal");
    }
}
