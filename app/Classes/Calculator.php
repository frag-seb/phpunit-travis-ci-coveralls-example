<?php

namespace Projects\Ankur;

class Calculator
{


    /**
     * Add two numbers
     * @param $x
     * @param $y
     * @return mixed
     */
    public function addTwo($x, $y)
    {
        return $x + $y;
    }

    /**
     * Multiply two numbers
     * @param $x
     * @param $y
     * @return mixed
     *
     */
    public function multiplyTwo($x, $y)
    {
        return $x * $y;
    }

    /**
     * Subtract two numbers
     * @param $x
     * @param $y
     * @return mixed
     *
     */
    public function subtractTwo($x, $y)
    {
        return $x - $y;
    }

    /**
     * Divide two numbers
     * //TODO Handle divide by zero
     * @param $x
     * @param $y
     * @return float
     */
    public function divideTwo($x, $y)
    {
        return $x / $y;
    }

}