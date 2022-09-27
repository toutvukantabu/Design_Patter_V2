<?php

namespace App\Normalizer;

use App\Interface\NormalizerInteface;

class Normalizer
{

    public function __construct(mixed $object)
    {

        $this->object = $object;

        switch (true) {
            case $this->isArrayType():
                return $this->object;
                break;

            case $this->isJsonType():
                return (new JsonNormalizer())->normalize($object);
                break;

            case $this->isXMLType():
                return new XMLNormalizer($object);
        }
    }

    private function isJsonType(): bool
    {
        return true;
    }

    private function isArrayType(): bool
    {

        return is_array($this->object);
    }

    private function isXMLType(): bool
    {

        return true;
    }
}
