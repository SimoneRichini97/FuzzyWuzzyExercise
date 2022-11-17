<?php
declare(strict_types=1);

namespace FuzzyWuzzy;

class FuzzyWuzzy
{
    public function say(int $number): string
    {
        return 'Hello ';
    }

    public function getResult(array $numbers, int $size = -1, int $index = 0, string $result = ''): string {
        if ($size === -1) {
            $size = count($numbers);
        }
        if ($index < count($numbers)) {
            return $this->getResult($numbers, $size, $index+1, $result . $this->elaborateNumber($numbers[$index]));
        }
        return $result;
    }

    public function elaborateNumber(int $number): string {
        if ($number <= 0) {
            throw new \InvalidArgumentException('Found number <= 0');
        }
        if ($number % 3 === 0) {
            return 'Fuzzy';
        }
        if ($number % 5 === 0) {
            return 'Wuzzy';
        }
        if ($number % 7 === 0) {
            return 'FuzzyWuzzy';
        }
        return '';
    }

}