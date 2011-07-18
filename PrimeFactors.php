<?php
class PrimeFactors
{
    private $factors = array();

    public function fromScalars(array $scalars)
    {
        rsort($scalars);
        $factors = new self();
        foreach ($scalars as $scalar) {
            $factors->add(new IntegerNumber($scalar));
        }
        return $factors;
    }

    public function add(IntegerNumber $factor)
    {
        array_unshift($this->factors, $factor);
    }
}
