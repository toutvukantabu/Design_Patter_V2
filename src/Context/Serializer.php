<?php

namespace App\Context;

use App\Interface\NormalizerInteface;
use App\Normalizer\JsonNormalizer;
use App\Normalizer\ObjectNormalizer;
use App\Normalizer\XMLNormalizer;
use App\Strategy\jsonFormater;
use App\Strategy\PlainTextFormater;
use App\Strategy\XmlFormater;

class Serializer
{
    private ?array $definedFormater = [];
    private ?array $definedNormalizer = [];
    private ?array $DatasFormated = [];

    private array $formater = [jsonFormater::class, XmlFormater::class, PlainTextFormater::class];

    private array $normalizer = [JsonNormalizer::class, ObjectNormalizer::class, XMLNormalizer::class];

    public  function __construct(array $definedFormater = null,  array $definedNormalizer = null)
    {
        $this->definedNormalizer = $definedNormalizer;
        $this->definedFormater = $definedFormater;
    }

    public function serialize(mixed $object, string $format): mixed
    {
        if (!$this->definedFormater && !$format) {

            echo 'Erreur format required';
        }

        $normalizer  = $this->normalizer ? $this->definedNormalizer : $this->normalizer;

        foreach ($normalizer  as $normalize) {



            if ($normalize->support($format) || $normalize instanceof NormalizerInteface) {
                return $normalize->normalize($object);
            }
        }

        // foreach ($this->formater as $format) {

        //     if ($format->support($format)) {
        //         return $format->transform($object);
        //     }
        // }
    }


    /**
     * Get the value of definedFormater
     *
     * @return ?array
     */
    public function getDefinedFormater(): ?array
    {
        return $this->definedFormater;
    }

    /**
     * Get the value of definedNormalizer
     */
    public function getDefinedNormalizer()
    {
        return $this->definedNormalizer;
    }
}
