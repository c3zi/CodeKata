<?php
/**
 * This file is part of the Kata package. 
 * 
 * Created by REC Global
 * User: Przemyslaw Furtak
 * Date: 2015-06-09
 * Time: 11:11
 */

namespace Kata\OddEven;

class OddEven 
{
    const EVEN = 'even';
    const ODD = 'odd';

    public function getNumbers($n = 100)
    {
        $results = [];

        for ($i = 1; $i <= $n; $i++)
        {
            $index = $i - 1;
            if ($this->isEven($i)) {
                $results[$index] = self::EVEN;
            }

            if ($this->isOdd($i)) {
                $results[$index] = self::ODD;
            }

            if (!isset($results[$index])) {
                $results[] = $i;
            }
        }

        return $results;
    }

    private function isOdd($n)
    {
        return 0 !== $n % 2 && 0 === $n % $n;
    }

    private function isEven($n)
    {
        return 0 === $n % 2;
    }

    private function isPrime($n)
    {
        if ($n < 2) {
            return false;
        }

        if ($this->isEven($n)) {
            return false;
        }

        $divisible = 3;
        while ($divisible*$divisible <= $n) {
            if (0 === $n % $divisible) {
                return false;
            }
            $divisible += 2;
        }
        return true;
    }
}