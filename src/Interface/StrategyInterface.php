<?php

namespace App\Interface;

use App\Interface\NormalizerInteface;

Interface StrategyInterface{

    public function transform();
    public function support();
    
}