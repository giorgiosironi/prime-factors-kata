<?php
class PrimeFactors
{
    private $factors;

    public function __construct(array $factors = array())
    {
        $this->factors = $factors;
    }

    public function add($factor)
    {
        $this->factors[] = $factor;
    }
}
