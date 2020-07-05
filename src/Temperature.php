<?php
namespace Adamhut\UnitConversion;

class Temperature
{
    protected $celcius;


    public static function fromCelcius(float $celcius)
    {
        return new static($celcius);
    }

    public function __construct(float $celcius)
    {
        $this->celcius = $celcius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celcius * 1.8) + 32;
    }
}
