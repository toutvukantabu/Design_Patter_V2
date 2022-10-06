<?php

namespace App\Normalizer;

use App\Interface\NormalizerInterface;

class JsonNormalizer implements NormalizerInterface
{

     public function normalize(mixed $serializableObject): array
     {
          dump(json_decode($serializableObject));
          return  json_decode($serializableObject);
     }

     public function support(string $param): bool
     {
          return $param = 'json';
     }
}
