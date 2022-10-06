<?php

namespace App\Context;

use App\Strategy\XmlFormater;
use App\Strategy\jsonFormater;
use App\Normalizer\XmlNormalizer;
use App\Normalizer\JsonNormalizer;
use App\Strategy\PlainTextFormater;
use App\Interface\StrategyInterface;
use App\Normalizer\ObjectNormalizer;

use App\Interface\NormalizerInterface;

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
                if ($normalizerClass instanceof NormalizerInterface &&   $formaterClass instanceof StrategyInterface) {
                    if ($normalizerClass->support($format)) {
                        if (is_array($object)) {

                            $this->dataFormated = $formaterClass->transform($object);
                        } else {

                            $this->dataFormated = $formaterClass->transform($normalizerClass->normalize($object));
                        }

                        if ($countFormater > 1) {

                            array_push($this->datasFormated, $this->dataFormated);
                        }
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
}
