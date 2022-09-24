<?php

namespace App\Strategy;

use App\Interface\FormaterInterface;
use App\Interface\StrategyInterface;

class Strategy
{

    private StrategyInterface $strategy;

    public function __construct(StrategyInterface $strategy)
    {

        $this->strategy = $strategy;
    }
    public function getDataTransformed(FormaterInterface $formater): string
    {
        return $this->strategy->transform($formater);
    }
}
