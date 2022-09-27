<?php

namespace App\Interface;

use App\Context\Serializer;

Interface NormalizerInteface{

    public function Normalize(Serializer $serializableObject): array;
    
}