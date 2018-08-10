<?php

namespace Remmel\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzStupidTest extends TestCase {
    public function testFizzbuzz() {
        $this->assertEquals(1, FizzBuzzStupid::fizzbuzz(1));
    }

    public function testFizzbuzzRange() {
        $this->assertEquals([1], FizzBuzzStupid::fizzbuzzRange(1,1));
    }
}
