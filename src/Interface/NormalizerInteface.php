<?php

namespace App\Interface;

Interface NormalizerInteface{

    public function Normalize(mixed $object): array;
    public function support( string $param) :bool;
}