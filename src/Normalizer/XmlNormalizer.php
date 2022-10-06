<?php
namespace App\Normalizer;

use App\Context\Serializer;
use App\Interface\NormalizerInteface;



class XMLNormalizer implements NormalizerInteface
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
