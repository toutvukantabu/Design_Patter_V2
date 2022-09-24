<?php

namespace App\Strategy;

use App\Interface\StrategyInterface;
use App\Interface\FormaterInterface;

class PlainTextFormat implements StrategyInterface
{

    private string $implode;

    public function __constuct(string $implode = ',')
    {
        $this->impode = $implode;
    }


    public function Transform(FormaterInterface $format)
    {
        return implode($this->implode, $format->getData());
    }
}
