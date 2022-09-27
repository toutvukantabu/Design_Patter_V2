<?php
namespace App\Normalizer;

use App\Context\Serializer;
use App\Interface\NormalizerInteface;



class ObjectNormalizer implements NormalizerInteface
{

    public function normalize( $serializableObject): array{

        return  json_decode(json_encode($serializableObject), true);
        
        }
        
}
