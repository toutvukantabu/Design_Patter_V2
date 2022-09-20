<?php

namespace App\Strategy;

class Strategy
{

    private StrategyInterface $strategy;


    public function setStrategy(StrategyInterface $strategy)
    {

        $this->strategy = $strategy;
    }

    public function getStrategy(): StrategyInterface
    {

        return $this->strategy;
    }
}
