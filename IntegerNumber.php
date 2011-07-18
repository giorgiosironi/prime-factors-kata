<?php
class IntegerNumber
{
    private $number;
    
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function primeFactors()
    {
        return new PrimeFactors(array($this->number));
    }
}
