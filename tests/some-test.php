<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require(__DIR__ . "/../src/class-dependency-manager.php");

final class some_test extends TestCase
{
    public function testSomething(): void
    {
        $this->assertEquals(1, 1);
    }
}
