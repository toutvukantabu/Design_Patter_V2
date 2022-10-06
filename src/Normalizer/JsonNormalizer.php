<?php

namespace App\Normalizer;

use App\Interface\NormalizerInteface;

class JsonNormalizer implements NormalizerInteface
{

     public function normalize(mixed $serializableObject): array
     {

          return  json_decode(json_encode($serializableObject), true);
     }

     public function support(string $param): bool
     {
          return $param = 'xml';
     }
}
