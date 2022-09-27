<?php
namespace App\Normalizer;

use App\Context\Serializer;
use App\Interface\NormalizerInteface;



class XMLNormalizer implements NormalizerInteface
{

    public function normalize(Serializer $serializableObject): array{

        return  json_decode(json_encode($serializableObject), true);
        
        }
        
}
