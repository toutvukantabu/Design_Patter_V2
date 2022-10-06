<?php

namespace App\Strategy;



use SimpleXMLElement;
use App\Entity\Formater;
use App\Interface\FormaterInterface;
use App\Interface\StrategyInterface;

class XmlFormater  implements StrategyInterface
{

    private string $rootElement;

    private SimpleXMLElement $xml;



    public function transform(Normalizer $normalizer)
    {
        foreach ($formater->getData() as $k => $v) {
            if (is_array($v)) {
                $formaterTwo = (new Formater())->setData($v);
                self::transform($formaterTwo);
                $this->xml->addChild($k);
            } else {
                $this->xml->addChild($k, $v);
            }
        }
        return $this->xml->asXML();
    }


    public function Support(string $param):bool {
        return $param = 'xml';
    }
}
