<?php

namespace App;

class StringCalculator

{
    public function calculate($string)
    {
        if($string != "") {
            return $string;
        }
        return 0;
    }
}
