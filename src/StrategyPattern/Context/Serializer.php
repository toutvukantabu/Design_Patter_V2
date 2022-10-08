<?php

namespace App\StrategyPattern\Context;

use App\StrategyPattern\Strategy\XmlFormater;
use App\StrategyPattern\Strategy\jsonFormater;
use App\StrategyPattern\Normalizer\XmlNormalizer;
use App\StrategyPattern\Normalizer\JsonNormalizer;
use App\StrategyPattern\Strategy\PlainTextFormater;
use App\StrategyPattern\Interface\StrategyInterface;
use App\StrategyPattern\Normalizer\ObjectNormalizer;

use App\StrategyPattern\Interface\NormalizerInterface;

class Serializer
{
    private ?array $definedFormater = [];
    private ?array $definedNormalizer = [];
    private ?array $datasFormated = [];
    private mixed $dataFormated;

    private array $formater = [jsonFormater::class, XmlFormater::class, PlainTextFormater::class];

    private array $normalizer = [JsonNormalizer::class, ObjectNormalizer::class, XmlNormalizer::class];

    public  function __construct(array $definedFormater = null,  array $definedNormalizer = null)
    {

        if ($definedFormater) $this->definedNormalizer = $definedNormalizer;
        if ($definedNormalizer) $this->definedFormater = $definedFormater;
    }

    public function serialize(mixed $object, string $format): self
    {
        if (!$this->definedFormater && !$format) {

            echo 'Erreur format required';
        }

        $normalizer  = $this->normalizer ?? $this->definedNormalizer;
        $formater = $this->formater ?? $this->definedFormater;

        $countFormater = count($formater);

        foreach ($normalizer  as $normalize) {
            foreach ($formater as $format) {
                $normalizerClass  = new $normalize;
                $formaterClass = new $format;
                // dump($normalizer instanceof NormalizerInterface ,$formaterClass instanceof StrategyInterface);

                $datanormalized = $normalizerClass->normalize($object);
                if (is_array($datanormalized) ) {

                    $this->dataFormated = $formaterClass->transform($datanormalized);
dump($this->dataFormated);
                    if ($countFormater > 1) {

                        array_push($this->datasFormated, $this->dataFormated);
                    }
                }
            }
        }

        return $this;
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

    /**
     * Get the value of datasFormated
     */ 
    public function getDatasFormated()
    {
        return $this->datasFormated;
    }

    /**
     * Get the value of dataFormated
     */ 
    public function getDataFormated()
    {
        return $this->dataFormated;
    }
}
