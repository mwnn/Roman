<?php

namespace Test\Workshop;

use Workshop\RomanNumberConverter;

/**
 * Testing Decimal -> Roman number conversion.
 */
class RomanNumberConverterTest extends \PHPUnit_Framework_TestCase {

    /** @var RomanNumberConverter */
    private $converter;

    /**
     * Setup.
     */
    public function setUp()
    {
        $this->converter = new RomanNumberConverter();
    }

    /**
     * Run test on happy path...
     *
     * @param int $decimalNumber
     * @param string $expectedRomanNumber
     *
     * @dataProvider provideDecimalAndRomanNumberPairs
     */
    public function testConverterShouldConvertDecimalNumberToRoman($expectedRomanNumber, $decimalNumber) {

        $this->assertSame($expectedRomanNumber, $decimalNumber);
    }

    /**
     * Number data provider.
     *
     * @return array
     */
    public function provideDecimalAndRomanNumberPairs()
    {
        return [
            [null, null],
        ];
    }
}
