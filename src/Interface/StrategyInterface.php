<?php

namespace App\Interface;

use App\Interface\NormalizerInteface;

Interface StrategyInterface{

    public function transform(array $data);
    public function support(string $param);
    
}