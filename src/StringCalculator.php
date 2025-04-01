<?php

namespace Deg540\StringCalculatorPHP;

use function PHPUnit\Framework\isEmpty;

class StringCalculator
{
    public function add(String $numbers): int
    {
        if (empty($numbers)) {
            return 0;
        }

        $delimiter = $this->getDelimiter($numbers);

        $numbers = str_replace('\n', "$delimiter", $numbers);

        if (str_contains($numbers,"$delimiter")) {
            $explodedNumbers = explode("$delimiter", $numbers);
            return array_sum($explodedNumbers);
        }

        return intval($numbers);
    }

    public function getDelimiter(string $string): string
    {
        if (str_contains($string, '//')) {
            return $string[2];
        }

        return ",";
    }
}