<?php

namespace App\Normalizer;

use App\Interface\NormalizerInteface;

class StringNormalizer implements NormalizerInteface
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