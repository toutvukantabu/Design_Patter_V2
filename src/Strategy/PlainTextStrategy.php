<?php

namespace App\Strategy;
use App\Strategy\AbstractStrategy;
use App\Strategy\StrategyInterface;

class PlaintextStrategy extends AbstractStrategy implements StrategyInterface
{

    private string $implode;

    public function __constuct(string $implode = ',')
    {
        $this->impode = $implode;
    }


    public function Transform( $data)
    {
        
        return implode($this->implode, parent::toArray($data));
    }
}
