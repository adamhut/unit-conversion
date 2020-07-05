<?php

namespace Adamhut\UnitConversion\Tests;

use Adamhut\UnitConversion\Temperature;
use Adamhut\UnitConversion\Weight;
use PHPUnit\Framework\TestCase;

class TemperutureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celcius_to_fahrenheit()
    {
        
        $fahrenheit = Temperature::fromCelcius(100)->toFahrenheit();
        
        $this->assertEquals(212, $fahrenheit);
    }
}
