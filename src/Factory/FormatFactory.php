<?php

namespace App\Factory;

use App\Strategy\XmlFormat;
use App\Strategy\JsonFormat;
use App\Strategy\PlaintextFormat;

class FormatFactory
{

    public static function getTransformMethod(string $method, mixed $data)
    {

        switch ($method) {

            case ('xml'):
                return new XmlFormat();
                break;
            case ('json'):
                return new JsonFormat();
                break;
            case ('plainText'):
                return new PlaintextFormat();
                break;
       default: 
       echo 'error no formater found';
       break;
        }
    }
}
