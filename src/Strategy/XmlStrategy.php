<?php

namespace App\Strategy;

use SimpleXMLElement;

use App\Strategy\AbstractStrategy;
use App\Strategy\StrategyInterface;


class XmlStrategy extends AbstractStrategy implements StrategyInterface
{

    private string $rootElement;

    private SimpleXMLElement $xml;

    public function __construct(string $rootElement = null)
    {
        $this->xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>');

    }


    public function transform(array $data)
    {
        return self::arrayToXml(parent::toArray($data));
    }

    private function arrayToXml(array $data)
    {
        foreach ($data as $k => $v) {
            if (is_array($v)) {

                self::arrayToXml($v, $k, $this->x->addChild($k));
            } else {
                $this->xml->addChild($k, $v);
            }
        }
        return $this->xml->asXML();
    }
}
