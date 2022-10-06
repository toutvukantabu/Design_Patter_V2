<?php

namespace App\Strategy;

use App\Interface\StrategyInterface;
use App\Interface\FormaterInterface;

class PlainTextFormater implements StrategyInterface
{

    private string $implode;

    public function __constuct(string $implode = ',')
    {
        $this->impode = $implode;
    }


    public function transform(Normalizer $normalizer)
    {
        return implode($this->implode, $format->getData());
    }
}
