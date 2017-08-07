<?php

namespace PHPCIDemo;

use PHPCIDemo\Calculate;
use PHPUnit\Framework\TestCase;

/**
 * Class CalculateTest
 */
class CalculateTest extends TestCase {
    public function testTrue() {
        $this->assertEquals(true, true);
    }
}