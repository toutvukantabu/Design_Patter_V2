<?php

namespace App\StrategyPattern\Normalizer;

use App\StrategyPattern\Interface\NormalizerInterface;


use DateTimeInterface;

class ObjectNormalizer
{

    public function Normalize($object): ?array
    {

        if (!\is_object($object)) {
            return null;
        }
        foreach ((array) $object as $key => $value) {
            if ($value instanceof DateTimeInterface) {
                $value = $value->format('Y/m/d h:i:s');
            }
            if (empty($value)) {
                $value = null;
            }

            $array[preg_replace('/\000(.*)\000/', '', $key)] = $value;
        }

        return $array;
    }

    public function support(string $param): bool
    {
        return 'object' === $param;
    }
}
