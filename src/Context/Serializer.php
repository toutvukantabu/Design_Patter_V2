<?php

namespace App\Context;

use App\Strategy\jsonFormater;
use App\Strategy\PlainTextFormater;
use App\Strategy\XmlFormater;

class Serializer
{
    private array $formater = [
        new jsonFormater, new XmlFormater, new PlainTextFormater

    ];

    private array $normalizer = [


    ];

    public  function __construct(array $formater)
    {
   // foreach si interface 

    }

    public function serialize(mixed $object, string $format): mixed
    {
        foreach ($this->formater as $format) {

            if ($format->support($format)) {
                return $format->transform($object);
            }
        }
    }
}
