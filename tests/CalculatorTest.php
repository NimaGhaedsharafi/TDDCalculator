<?php
use App\Calculator;

/**
 * Created by PhpStorm.
 * User: nghaedsharafi
 * Date: 3/6/17
 * Time: 16:25
 */
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function addition_should_result_the_sum_of_two_numbers()
    {
        $calculator = new Calculator();

        $a = rand(0, 100);
        $b = rand(0, 100);
        $result = $calculator->add($a, $b);

        $this->assertEquals($a + $b, $result);
    }

    /**
     * @test
     */
    public function multiplication_should_result_the_multiply_of_two_numbers()
    {
        $calc = new Calculator();

        $a = rand(0, 100);
        $b = rand(0, 100);

        $result = $calc->multiply($a, $b);

        $this->assertEquals($a * $b, $result);
    }

    /**
     * @test
     */
    public function subtract_should_result_the_subtraction_of_two_numbers()
    {
        $calculator = new Calculator();

        $a = rand(0, 100);
        $b = rand(0, 100);
        $result = $calculator->subtract($a, $b);

        $this->assertEquals($a - $b, $result);
    }
}