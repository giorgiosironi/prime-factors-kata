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
        if ($this == self::ONE()) {
            return new PrimeFactors();
        }
        if ($this->divisibleBy(2)) {
            $divided = $this->divideBy(2);
            $factors = $divided->primeFactors();
            $factors->add(2);
            return $factors;
        }
        return new PrimeFactors(array($this->number));
    }

    public function divisibleBy($factor)
    {
        return $this->number % 2 == 0;
    }

    public function divideBy($factor)
    {
        return new self($this->number / $factor);
    }

    public static function ONE()
    {
        return new self(1);
    }
}
