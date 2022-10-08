<?php

namespace App\StrategyPattern\Strategy;


use App\StrategyPattern\Interface\StrategyInterface;


class jsonFormater  implements StrategyInterface
{

    public function Transform(array $data): string
    {

        return  json_encode($data);
    }
    public function support(string $param): bool
    {
        return $param = 'json';
    }
}
