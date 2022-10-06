<?php

namespace App\Normalizer;

use App\Interface\NormalizerInterface;

class StringNormalizer implements NormalizerInterface
{

     public function normalize(mixed $serializableObject): array
     {

          return  json_decode(json_encode($serializableObject), true);
     }

     public function support(string $param): bool
     {
          return $param = 'string';
     }
}