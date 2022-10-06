<?php

namespace App\Strategy;

use App\Context\Serializer;

use App\Interface\StrategyInterface;
use App\Interface\NormalizerInteface;
use Normalizer;

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
