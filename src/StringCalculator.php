<?php

namespace App;

class StringCalculator

{
    public function calculate($string)
    {
        if (str_contains($string, ',')) {
            $arr = explode(',', $string);
            return array_sum($arr);
        }
        if ($string != "") {
            return $string;
        }
        return 0;
    }
}
