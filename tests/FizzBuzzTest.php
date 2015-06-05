<?php
/**
 * This file is part of the Kata package. 
 *
 * User: Przemyslaw Furtak
 * Date: 2015-06-08
 * Time: 14:52
 */

namespace Kata\FizzBuzz\Test;

use Kata\Test\BaseTestCase;
use Kata\FizzBuzz\FizzBuzz;

class FizzBuzzTest extends BaseTestCase
{

    /**
     * @test
     */
    public function isFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isFizz', array(3)), true);
    }

    /**
     * @test
     */
    public function isFizzOne()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isFizz', array(1)), false);
    }

    /**
     * @test
     */
    public function isBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isBuzz', array(5)), true);
    }

    /**
     * @test
     */
    public function isNotFizz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isFizz', array(4)), false);
    }

    /**
     * @test
     */
    public function isNotBuzz()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->invokeMethod($fizzbuzz, 'isBuzz', array(4)), false);
    }

    /**
     * @test
     */
    public function show1To2()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(2), '1 2');
    }

    /**
     * @test
     */
    public function show1To3()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(3), '1 2 Fizz');
    }

    /**
     * @test
     */
    public function show1To4()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(4), '1 2 Fizz 4');
    }

    /**
     * @test
     */
    public function show1To5()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(5), '1 2 Fizz 4 Buzz');
    }

    /**
     * @test
     */
    public function show1To15()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($fizzbuzz->show(15), '1 2 Fizz 4 Buzz Fizz 7 8 Fizz Buzz 11 Fizz 13 14 FizzBuzz');
    }
}