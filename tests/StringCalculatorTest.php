<?php

namespace Tests;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    public function test_return_0_when_empty_string() {
      $string = new StringCalculator();

      $result = $string->start("");
      
      $this->assertEquals(0, $result);
    }
}