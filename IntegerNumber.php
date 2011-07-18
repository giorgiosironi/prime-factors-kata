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
        return array($this->number);
    }
}
