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
        $factors = false;
        $divisor = self::TWO();
        while ($this->isAcceptableDivisor($divisor) && !$factors) {
            $factors = $this->decomposeWith($divisor);
            $divisor = $divisor->increment();
        }
        return $factors;
    }

    public function isAcceptableDivisor(IntegerNumber $divisor)
    {
        return $this->number >= $divisor->number;
    }

    public function decomposeWith(IntegerNumber $divisor)
    {
        if ($this->divisibleBy($divisor)) {
            $factors = new PrimeFactors();
            $divided = $this->divideBy($divisor);
            $factors = $divided->primeFactors();
            $factors->add($divisor);
            return $factors;
        }
        return false;
    }

    public function divisibleBy(IntegerNumber $factor)
    {
        return $this->number % $factor->number == 0;
    }

    public function divideBy(IntegerNumber $factor)
    {
        return new self($this->number / $factor->number);
    }

    public function increment()
    {
        return new self($this->number + 1);
    }

    public static function ONE()
    {
        return new self(1);
    }

    public static function TWO()
    {
        return new self(2);
    }
}
