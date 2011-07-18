<?php
require_once 'IntegerNumber.php';

class IntegerNumberTest extends PHPUnit_Framework_TestCase
{
    public function testDecomposesIntoItsPrimeFactors()
    {
        $number = new IntegerNumber(2);
        $this->assertEquals(array(2), $number->primeFactors());
    }
}
