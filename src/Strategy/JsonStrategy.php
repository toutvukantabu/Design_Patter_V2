<?php

namespace App\Strategy;

use App\Strategy\AbstractStrategy;
use App\Strategy\StrategyInterface;

class JsonStrategy extends AbstractStrategy implements StrategyInterface
{

    public function Transform(array $data)
    {
        return json_encode(parent::toArray($data));
    }
}
