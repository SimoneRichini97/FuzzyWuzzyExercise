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

    public function testShouldReturnEmptyString(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('', $fuzzyWuzzy->getResult(array(1, 2, 4, 8)));
    }

    public function testShouldReturnFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('Fuzzy', $fuzzyWuzzy->getResult(array(1, 2, 6, 8)));
    }

    public function testShouldReturnFuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzy', $fuzzyWuzzy->getResult(array(1, 2, 6, 5, 8)));
    }

    public function testShouldReturnFuzzyWuzzyFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzyFuzzy', $fuzzyWuzzy->getResult(array(1, 7, 4, 6)));
    }

    public function testShouldReturnFuzzyWuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzyWuzzy', $fuzzyWuzzy->getResult(array(1, 7, 4, 2, 5)));
    }

    public function testShouldReturnFuzzyWuzzyWuzzyFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzyWuzzyFuzzy', $fuzzyWuzzy->getResult(array(1, 7, 4, 2, 5, 6)));
    }

    public function testShouldReturnWuzzyFuzzyFuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyFuzzy', $fuzzyWuzzy->getResult(array(15, 2, 3)));
    }

    public function testShouldReturnWuzzyFuzzyFuzzyWuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyFuzzyWuzzyWuzzy', $fuzzyWuzzy->getResult(array(2, 105, 5)));
    }

    public function testShouldReturnWuzzyFuzzyWuzzyFuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('WuzzyFuzzyWuzzyFuzzyWuzzy', $fuzzyWuzzy->getResult(array(21, 4, 14)));
    }

    public function testShouldReturnFuzzyWuzzyWuzzyWuzzy(): void
    {
        $fuzzyWuzzy = new FuzzyWuzzy();

        $this->assertEquals('FuzzyWuzzyWuzzyWuzzy', $fuzzyWuzzy->getResult(array(70, 2, 2, 2, 10)));
    }

}