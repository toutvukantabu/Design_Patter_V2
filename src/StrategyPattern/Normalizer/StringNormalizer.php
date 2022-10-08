<?php

namespace App\StrategyPattern\Normalizer;

use App\StrategyPattern\Interface\NormalizerInterface;

class StringNormalizer implements NormalizerInterface
{

     public function normalize(mixed $serializableObject): array
     {
          if (!is_string($serializableObject)) {

               return [];
          }
          return  explode('', $serializableObject);
     }

     public function support(string $param): bool
     {
          return $param = 'string';
     }
}
