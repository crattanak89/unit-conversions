<?php

namespace Rattanak\UnitConversions;

class Weight
{
    private $kilograms;

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function toGrams(): float
    {
        return $this->kilograms * 1000;
    }
}
