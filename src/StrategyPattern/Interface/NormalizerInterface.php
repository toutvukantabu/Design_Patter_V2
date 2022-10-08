<?php

namespace App\StrategyPattern\Interface;

interface NormalizerInterface
{

    public function Normalize(mixed $object): ?array;
    public function support(string $param): bool;
}
