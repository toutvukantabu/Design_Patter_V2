<?php

namespace App\StrategyPattern\Strategy;



use SimpleXMLElement;
use App\StrategyPattern\Interface\StrategyInterface;

class XmlFormater  implements StrategyInterface
{

    private string $rootElement;

    private SimpleXMLElement $xml;



    public function transform(array $data)
    {
        return $data;
    }


    public function Support(string $param): bool
    {
        return $param = 'xml';
    }
}
