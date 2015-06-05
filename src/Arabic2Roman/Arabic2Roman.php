<?php
/**
 * This file is part of the Kata package. 
 * 
 * Created by REC Global
 * User: Przemyslaw Furtak
 * Date: 2015-06-08
 * Time: 11:12
 */

namespace Kata\Arabic2Roman;

/**
 * Class Arabic2Roman
 * @package Kata\Arabic2Roman
 */
class Arabic2Roman 
{
    /**
     * @var array
     */
    private $transform = [
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    /**
     * Converts Arabic to Roman numerals.
     *
     * @param $arabic arabic number
     * @return string roman nubmer
     */
    public function convert($arabic)
    {
        $result = '';

        foreach ($this->transform as $key => $value) {
            while ($arabic >= $key) {
                $result .= $value;
                $arabic -= $key;
            }
        }

        return $result;
    }
}