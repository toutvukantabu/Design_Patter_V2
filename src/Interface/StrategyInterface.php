<?php

namespace App\Interface;

use App\Entity\Formater;



Interface StrategyInterface{

    public function transform(Formater $formater);
    
}