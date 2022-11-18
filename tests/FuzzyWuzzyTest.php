<?php

declare(strict_types=1);

namespace FuzzyWuzzy;

use PHPUnit\Framework\TestCase;

class FuzzyWuzzyTest extends TestCase
{
    public function testShouldReturnString(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Hello ', $fuzzyWuzzy->say(2));
    }

    public function testShouldThrowException(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->expectException(\InvalidArgumentException::class);
        $fuzzyWuzzy->getResult(array(1, 2, -3, 4, 5, 6));
    }

    public function testShouldReturnNumbers(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('1248', $fuzzyWuzzy->getResult(array(1, 2, 4, 8)));
    }

    public function testShouldReturnFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('12Fuzzy8', $fuzzyWuzzy->getResult(array(1, 2, 6, 8)));
    }

    public function testShouldReturnFuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('12FuzzyWuzzy8', $fuzzyWuzzy->getResult(array(1, 2, 6, 5, 8)));
    }

    public function testShouldReturnFuzzyWuzzyFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('1FuzzyWuzzy4Fuzzy', $fuzzyWuzzy->getResult(array(1, 7, 4, 6)));
    }

    public function testShouldReturnFuzzyWuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('1FuzzyWuzzy42Wuzzy', $fuzzyWuzzy->getResult(array(1, 7, 4, 2, 5)));
    }

    public function testShouldReturnFuzzyWuzzyWuzzyFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('1FuzzyWuzzy42WuzzyFuzzy', $fuzzyWuzzy->getResult(array(1, 7, 4, 2, 5, 6)));
    }

    public function testShouldReturnWuzzyFuzzyFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzy2Fuzzy', $fuzzyWuzzy->getResult(array(15, 2, 3)));
    }

    public function testShouldReturnWuzzyFuzzyFuzzyWuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('2WuzzyFuzzyFuzzyWuzzyWuzzy', $fuzzyWuzzy->getResult(array(2, 105, 5)));
    }

    public function testShouldReturnWuzzyFuzzyWuzzyFuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyWuzzy4FuzzyWuzzy', $fuzzyWuzzy->getResult(array(21, 4, 14)));
    }

    public function testShouldReturnFuzzyWuzzyWuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzyWuzzy222Wuzzy', $fuzzyWuzzy->getResult(array(70, 2, 2, 2, 10)));
    }

}