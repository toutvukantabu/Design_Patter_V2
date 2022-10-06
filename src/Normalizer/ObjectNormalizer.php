<?php
namespace App\Normalizer;

use App\Interface\NormalizerInterface;
class ObjectNormalizer implements NormalizerInterface
{

    public function normalize( mixed $objet): array
    {

        return  json_decode(json_encode($objet), true);
        
        }

        public function support(string $param): bool
        {
             return $param = 'object';
        }
        
}
