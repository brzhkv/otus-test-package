<?php declare(strict_types=1);

namespace Otus\TestPackage;

class StringProcessor
{
    public function getLength(string $str): int
    {
        return strlen($str);
    }
}
