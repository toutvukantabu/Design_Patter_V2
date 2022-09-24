<?php

namespace App\Interface;

use Entity\Formater;

Interface StrategyInterface{

    public function transform(Formater $formater);
    
}