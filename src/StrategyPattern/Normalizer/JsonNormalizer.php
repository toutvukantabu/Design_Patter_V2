<?php

namespace App\StrategyPattern\Normalizer;

use App\StrategyPattern\Interface\NormalizerInterface;

class JsonNormalizer implements NormalizerInterface
{

     public function normalize(mixed $serializableObject): array
     {
          if (is_array($serializableObject)) {

               return [];
          }
          return  json_decode($serializableObject,true);
     }

     public function support(string $param): bool
     {
          return $param = 'json';
     }
}
