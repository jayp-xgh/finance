<?php

namespace App\Http\Controllers;

class CalculatorController
{

    public function add($a, $b)
    {
        $test = 1;


        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {

        return $a * $b;
    }

     public function divide($a, $b)
    {
        return $a / $b;
    }
}
