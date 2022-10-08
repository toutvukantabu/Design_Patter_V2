<?php

namespace App\StrategyPattern\Normalizer;

use App\StrategyPattern\Interface\NormalizerInterface;

class ObjectNormalizer implements NormalizerInterface
{

    public function normalize(mixed $object): ?array
    {
        if (!is_object($object)) {

            return [];
        }
        return  json_decode(json_encode($object), true);
    }

    public function support(string $param): bool
    {
        return $param = 'object';
    }
}
