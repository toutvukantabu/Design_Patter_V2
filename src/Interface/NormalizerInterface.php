<?php

namespace App\Interface;

Interface NormalizerInterface{

    public function Normalize(mixed $object): array;
    public function support( string $param) :bool;
}