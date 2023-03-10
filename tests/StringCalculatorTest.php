<?php

namespace Tests;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public function test_return_0_when_empty_string()
    {
        $string = new StringCalculator();

        $result = $string->calculate("");

        $this->assertEquals(0, $result);
    }

    public function test_return_num()
    {
        $string = new StringCalculator();

        $result = $string->calculate("4");

        $this->assertEquals(4, $result);
    }

    public function test_return_sum_when_recieves_two_numbers()
    {
        $string = new StringCalculator();

        $result = $string->calculate("1,2");

        $this->assertEquals(3, $result);
    }

    public function test_return_sum_when_recieves_more_than_one_number()
    {
        $string = new StringCalculator();

        $result = $string->calculate("1,2,3,4,5,6,7,8,9");

        $this->assertEquals(45, $result);
    }

    public function test_return_sum_when_recieves_string_with_new_line_separator()
    {
        $string = new StringCalculator();

        $result = $string->calculate("1/n2,3");

        $this->assertEquals(6, $result);
    }
}
