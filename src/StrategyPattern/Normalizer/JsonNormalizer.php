<?php

namespace App\StrategyPattern\Normalizer;

use App\StrategyPattern\Interface\NormalizerInterface;

class JsonNormalizer implements NormalizerInterface
{

    public function normalize($serializableObject): ?array
    {
        if (!is_object($serializableObject) && !\is_array($serializableObject)) {
            @json_decode($serializableObject);
            if ((json_last_error() === JSON_ERROR_NONE)) {

                return  json_decode($serializableObject, true);
            }
        }
        return null;
    }

    public function support(string $param): bool
    {
        return $param = 'json';
    }
}
