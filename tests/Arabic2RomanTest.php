<?php
/**
 * This file is part of the Kata package. 
 * 
 * User: Przemyslaw Furtak
 * Date: 2015-06-08
 * Time: 11:10
 */

namespace Kata\Arabic2Roman\Test;

use Kata\Test\BaseTestCase;
use Kata\Arabic2Roman\Arabic2Roman;

class Arabic2RomanTest extends BaseTestCase
{
    /**
     * @test
     */
    public function convertsTheIs()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('1'), 'I');
    }

    /**
     * @test
     */
    public function convertsTheIIs()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('2'), 'II');
    }

    /**
     * @test
     */
    public function convertsTheIIIs()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('3'), 'III');
    }

    /**
     * @test
     */
    public function convertsTheIVs()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('4'), 'IV');
    }

    /**
     * @test
     */
    public function convertsTheVs()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('5'), 'V');
    }

    /**
     * @test
     */
    public function convertsTheVI()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('6'), 'VI');
    }

    /**
     * @test
     */
    public function convertsTheVII()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('7'), 'VII');
    }

    /**
     * @test
     */
    public function convertsTheVIII()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('8'), 'VIII');
    }

    /**
     * @test
     */
    public function convertsTheIX()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('9'), 'IX');
    }

    /**
     * @test
     */
    public function convertsTheX()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('10'), 'X');
    }

    /**
     * @test
     */
    public function convertsTheXV()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('15'), 'XV');
    }

    /**
     * @test
     */
    public function convertsTheXX()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('20'), 'XX');
    }

    /**
     * @test
     */
    public function convertsTheXXV()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('25'), 'XXV');
    }

    /**
     * @test
     */
    public function convertsTheXXX()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('30'), 'XXX');
    }

    /**
     * @test
     */
    public function convertsTheXXXII()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('32'), 'XXXII');
    }

    /**
     * @test
     */
    public function convertsTheL()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('50'), 'L');
    }

    /**
     * @test
     */
    public function convertsTheIV()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('4'), 'IV');
    }

    /**
     * @test
     */
    public function convertsTheLXXVII()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('77'), 'LXXVII');
    }

    /**
     * @test
     */
    public function convertsTheLXXIV()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('74'), 'LXXIV');
    }

    /**
     * @test
     */
    public function convertsTheLXXIX()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('79'), 'LXXIX');
    }


    /**
     * @test
     */
    public function convertsTheLXXX()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('80'), 'LXXX');
    }

    /**
     * @test
     */
    public function convertsTheXLIV()
    {
        $arabic2roman = new Arabic2Roman();
        $this->assertEquals($arabic2roman->convert('44'), 'XLIV');
    }
}