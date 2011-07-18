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
        for ($divisor = self::TWO(); $divisor->lessOrEqualTo($this) && !$factors; $divisor = $divisor->increment()) {
            $factors = $this->decomposeWith($divisor);
        }
        return $factors;
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

    public function lessOrEqualTo(IntegerNumber $other)
    {
        return $this->number <= $other->number;
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
