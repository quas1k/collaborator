<?php

namespace tests\unit\services;

use app\services\CalculatorService;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    public function testCalculateEvenSum()
    {
        $calculator = new CalculatorService();
        $this->assertEquals(6, $calculator->calculateEvenSum([1, 2, 3, 4]));
    }
}