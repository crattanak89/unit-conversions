<?php

namespace Rattanak\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Rattanak\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_grams()
    {
        $grams = Weight::fromKilograms(1)->toGrams();

        $this->assertEquals(1000, $grams);
    }
}
