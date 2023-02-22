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

    public function test_return_num_when_recieves_two_numbers()
    {
        $string = new StringCalculator();

        $result = $string->calculate("1,2");

        $this->assertEquals(3, $result);
    }
}
