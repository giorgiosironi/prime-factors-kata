<?php
require_once 'IntegerNumber.php';
require_once 'PrimeFactors.php';

class IntegerNumberTest extends PHPUnit_Framework_TestCase
{
    public static function numbersToDecompose()
    {
        return array(
            array(
                2, array(2)
            ),
            array(
                3, array(3)
            ),
            array(
                4, array(2, 2)
            ),
            array(
                5, array(5)
            ),
            array(
                6, array(2, 3)
            )
        );
    }

    /**
     * @dataProvider numbersToDecompose
     */
    public function testDecomposesIntoItsPrimeFactors($number, $factors)
    {
        $number = new IntegerNumber($number);
        $factors = new PrimeFactors($factors);
        $this->assertEquals($factors, $number->primeFactors());
    }
}
