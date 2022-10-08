<?php

namespace App\StrategyPattern\Normalizer;

use App\StrategyPattern\Interface\NormalizerInterface;
use stdClass;

class XmlNormalizer implements NormalizerInterface
{


    public function normalize(mixed $object): ?array
    {
        if (is_array($object)) {

            return [];
       }
        return  json_decode($object, true);
    }

    public function support(string $param): bool
    {
        return $param = 'xml';
    }
}
