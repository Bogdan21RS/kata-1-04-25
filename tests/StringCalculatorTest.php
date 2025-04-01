<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $stringCalculator;

    protected function setUp(): void
    {
        $this->stringCalculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function givenNoNumbersReturnsZero(): void
    {
        $this->assertEquals(0, $this->stringCalculator->Add(''));
    }

    /**
     * @test
     */
    public function givenNumberReturnsTheNumber(): void
    {
        $this->assertEquals(5, $this->stringCalculator->Add('5'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedByCommasReturnsItsAddition(): void
    {
        $this->assertEquals(6, $this->stringCalculator->Add('1,2,3'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedByCommasAndBreakLinesReturnsItsAddition(): void
    {
        $this->assertEquals(6, $this->stringCalculator->Add('1\n2,3'));
    }

    /**
     * @test
     */
    public function givenNumbersSeparatedByDelimiterSequenceReturnsItsAddition(): void
    {
        $this->assertEquals(3, $this->stringCalculator->Add('//;\n1;2'));
    }

    /**
     * @test
     */
    public function givenDelimiterSequenceReturnsItsDelimiter(): void
    {
        $this->assertEquals(';', $this->stringCalculator->getDelimiter('//;'));
    }

    /**
     * @test
     */
    public function givenOneNegativeNumberThrowsException(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('negativos no soportados -1');

        $this->stringCalculator->Add('-1');
    }


}