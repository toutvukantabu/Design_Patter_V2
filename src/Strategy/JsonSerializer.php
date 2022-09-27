<?php

namespace App\Strategy;

use App\Context\Serializer;

use App\Interface\StrategyInterface;
use App\Interface\NormalizerInteface;
use Normalizer;

class JsonSerializer  implements StrategyInterface
{

    public function Transform(Normalizer $normalizer): string
    {
        return  json_encode($dataNormalized);
    }
}
