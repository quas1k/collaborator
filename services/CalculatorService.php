<?php
namespace app\services;

use app\interfaces\CalculatorInterface;

class CalculatorService implements CalculatorInterface
{
    public function calculateEvenSum(array $numbers): int
    {
        array_walk($numbers, function ($num) {
            if (!is_int($num)) {
                throw new \InvalidArgumentException("Support only int array");
            }
        });

        return array_sum(array_filter($numbers, fn($n) => $n % 2 === 0));
    }
}