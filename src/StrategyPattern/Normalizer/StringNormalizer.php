<?php

namespace App\StrategyPattern\Normalizer;

use App\StrategyPattern\Interface\NormalizerInterface;

class StringNormalizer
{

    public function Normalize( $dataNormalized): ?array
    {

        if(!\is_string($dataNormalized)){
            return null;
        }
        if (isset($option['explode'])) {

            return explode($option['explode'], $dataNormalized);
        }
        return  explode(' ', $dataNormalized);
    }

    public function support(string $param): bool
    {
        return 'ToString'=== $param;
    }

}
