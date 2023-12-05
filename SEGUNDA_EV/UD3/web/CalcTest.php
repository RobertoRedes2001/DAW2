<?php

use PHPUnit\Framework\TestCase;

require 'Calc.php';

class CalcTest extends TestCase
{
    public function test_sum1()
    {
        $calc = new Calc();
        $result = $calc->sum(1, 2);
        $this->assertEquals(3, $result); //este test lo pasa
    }
    public function test_sum2()
    {
        $calc = new Calc();
        $result = $calc->sum(1, -1);
        $this->assertEquals(0, $result); 
    }

    public function test_res1()
    {
        $calc = new Calc();
        $result = $calc->res(6, 2);
        $this->assertEquals(4, $result); //este test lo pasa
    }
    public function test_res2()
    {
        $calc = new Calc();
        $result = $calc->res(1, 1);
        $this->assertEquals(0, $result); 
    }

    public function test_mult1()
    {
        $calc = new Calc();
        $result = $calc->mult(1, 2);
        $this->assertEquals(2, $result); //este test lo pasa
    }
    public function test_mult2()
    {
        $calc = new Calc();
        $result = $calc->mult(2, 5);
        $this->assertEquals(10, $result); 
    }

    public function test_div1()
    {
        $calc = new Calc();
        $result = $calc->div(4, 2);
        $this->assertEquals(2, $result); //este test lo pasa
    }
    public function test_div2()
    {
        $calc = new Calc();
        $result = $calc->div(5, 2);
        $this->assertGreaterThan(2, $result); 
    }
}
