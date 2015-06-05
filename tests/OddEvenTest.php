<?php
/**
 * This file is part of the Kata package. 
 * 
 * Created by REC Global
 * User: Przemyslaw Furtak
 * Date: 2015-06-09
 * Time: 11:11
 */

namespace Kata\FizzBuzz\Test;

use Kata\Test\BaseTestCase;
use Kata\OddEven\OddEven;

class OddEvenTest extends BaseTestCase
{
    /**
     * @test
     */
    public function getNumbers()
    {
        $oddeven = new OddEven();
        $this->assertEquals(count($oddeven->getNumbers(100)), 100);
    }

    /**
     * @test
     */
    public function getNumbers2()
    {
        $oddeven = new OddEven();
        $results = $oddeven->getNumbers(10);

        $this->assertEquals(count($results), 10);
        $this->assertEquals($results[1], 'even');
        $this->assertEquals($results[3], 'even');
        $this->assertEquals($results[5], 'even');
        $this->assertEquals($results[2], 'odd');
        $this->assertEquals($results[4], 'odd');
        $this->assertEquals($results[6], 'odd');
        $this->assertEquals($results[0], 'odd');
    }

    /**
 * @test
 */
    public function isOdd()
    {
        $oddeven = new OddEven();
        $this->assertEquals($this->invokeMethod($oddeven, 'isOdd', array(1)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isOdd', array(11)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isOdd', array(2)), false);
    }

    /**
     * @test
     */
    public function isEven()
    {
        $oddeven = new OddEven();
        $this->assertEquals($this->invokeMethod($oddeven, 'isEven', array(2)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isEven', array(12)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isEven', array(3)), false);
        $this->assertEquals($this->invokeMethod($oddeven, 'isEven', array(11)), false);
    }

    /**
     * @test
     */
    public function isPrime()
    {
        $oddeven = new OddEven();
        $this->assertEquals($this->invokeMethod($oddeven, 'isPrime', array(3)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isPrime', array(5)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isPrime', array(7)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isPrime', array(9)), false);
        $this->assertEquals($this->invokeMethod($oddeven, 'isPrime', array(23)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isPrime', array(29)), true);
        $this->assertEquals($this->invokeMethod($oddeven, 'isPrime', array(30)), false);
    }

}