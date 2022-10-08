<?php

namespace App\StrategyPattern\Interface;

use App\StrategyPattern\Interface\NormalizerInteface;

interface StrategyInterface
{

    public function transform(array $data);
    public function support(string $param);
}
