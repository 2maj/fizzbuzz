<?php

namespace Remmel\FizzBuzz;

interface IFizzBuzz {
    /**
     * Returns the number $n except :
     * - for multiples of 3; returns "Fizz" instead of the number
     * - for the multiples of 5; returns "Buzz"
     * - for multiples of both 3 and 5 returns "FizzBuzz"
     * @param $n int
     * @return string
     */
    public static function fizzbuzz($n);

    /**
     * Returns the fizzbuzz results for number from $from to $to in an array
     * @param $from int
     * @param $to int
     * @return array
     */
    public static function fizzbuzzRange($from, $to);
}