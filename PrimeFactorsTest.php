<?php
require_once 'IntegerNumber.php';

class PrimeFactorsTest extends PHPUnit_Framework_TestCase
{
    public function testDecomposesNumbersIntoTheirPrimeFactors()
    {
        $number = new IntegerNumber(2);
        $this->assertEquals(array(2), $number->primeFactors());
    }
}
