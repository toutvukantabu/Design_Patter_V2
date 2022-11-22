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

    public function Transform(array $data): ?string
    {
        $toString = implode(',', $data);
        return str_replace(',,', '', $toString);
    }

    public function support(string $param): bool
    {
        return 'PlainText' === $param ;
    }
}
