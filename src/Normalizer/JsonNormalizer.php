<?php


namespace App\Normalizer;




class JsonNormalizer {


public function normalize(
     $serializableObject): array{

return  json_decode(json_encode($serializableObject), true);

}


}