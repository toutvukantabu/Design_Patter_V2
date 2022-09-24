<?php

namespace App\Strategy;

use Entity\Formater;

use SimpleXMLElement;
use Interface\FormaterInterface;
use App\Interface\StrategyInterface;

class XmlFormat  implements StrategyInterface
{

    private string $rootElement;

    private SimpleXMLElement $xml;

    public function __construct(string $rootElement = null)
    {
        $this->xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>');
    }

    public function transform(FormaterInterface $formater)
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
}
