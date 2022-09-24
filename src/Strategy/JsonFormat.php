<?php

namespace App\Strategy;


use App\Interface\FormaterInterface;
use App\Interface\StrategyInterface;

class JsonFormat  implements StrategyInterface
{

    public function Transform(FormaterInterface $formater)
    {
        return json_encode($formater->getData());
    }
}
