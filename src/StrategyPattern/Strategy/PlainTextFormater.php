<?php

namespace App\StrategyPattern\Strategy;

use App\StrategyPattern\Interface\StrategyInterface;

class PlainTextFormater implements StrategyInterface
{

    private string $implode;

    public function __constuct(string $implode = ',')
    {
        $this->impode = $implode;
    }


    public function Transform(array $data)
    {
        return implode('', $data);
    }

    public function support(string $param): bool
    {
        return $param = 'PlainText';
    }
}
