<?php
require_once 'IntegerNumber.php';

class IntegerNumberTest extends PHPUnit_Framework_TestCase
{
    public static function numbersToDecompose()
    {
        return array(
            array(
                2, array(2)
            )
        );
    }

    /**
     * @dataProvider numbersToDecompose
     */
    public function testDecomposesIntoItsPrimeFactors($number, $factors)
    {
        $number = new IntegerNumber($number);
        $this->assertEquals($factors, $number->primeFactors());
    }
}
