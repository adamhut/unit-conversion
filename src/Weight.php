<?php

namespace Adamhut\UnitConversion;
use Exception;

class Weight
{
    protected $kilograms;


    public static function fromKilograms(float $kilograms):self
    {
        $arr = [
            'test',
            'test'
        ];

        return (new static($kilograms));
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }


    public function toLbs() :float
    {
        return $this->kilograms * 2.204623;
    }
}
