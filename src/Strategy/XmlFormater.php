<?php

namespace App\Strategy;



use SimpleXMLElement;
use App\Entity\Formater;
use App\Interface\FormaterInterface;
use App\Interface\NormalizerInteface;
use App\Interface\StrategyInterface;

class XmlFormater  implements StrategyInterface
{

    private string $rootElement;

    private SimpleXMLElement $xml;



    public function transform(array $data)
    {
        return $data;
    }


    public function Support(string $param):bool {
        return $param = 'xml';
    }
}
