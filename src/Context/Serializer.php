<?php

namespace App\Context;

use App\Normalizer\XMLNormalizer;
use App\Strategy\JsonSerializer;
use App\Strategy\PlaintextFormat;
use Normalizer;

class Serializer
{

    private  $strategy = null;
    private $object = null;
    
    public  function __construct(mixed $object, string $method)
    {

        switch ($method) {

            case ('xml'):
                return $this->strategy = new XMLNormalizer(new Normalizer($object));
                break;
            case ('json'):
                return $this->strategy = new JsonSerializer(new Normalizer($object));
                break;
            case ('plainText'):
                return $this->strategy = new PlaintextFormat(new Normalizer($object));
                break;
            default:
                echo 'error no strategy found';
                break;
        }
    }

    public function serialize()
    {
        if (!$this->object) {
            return [];
        }
        return $this->strategy->transform($this->object);
    }



}
