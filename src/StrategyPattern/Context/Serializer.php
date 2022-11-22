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
    private $dataFormated = null;
    private ?array $dataNormalized = null;

    private array $formater = [JsonFormater::class, PlainTextFormater::class, ArrayFormater::class, LogsFormater::class];

    private array $normalizer = [JsonNormalizer::class, ObjectNormalizer::class, StringNormalizer::class];

    /**
     * Undocumented function
     *
     * @param array|null $definedFormater
     * @param array|null $definedNormalizer
     */
    public  function __construct(array $definedFormater = null,  array $definedNormalizer = null)
    {

        if ($definedFormater) $this->definedNormalizer = $definedNormalizer;
        if ($definedNormalizer) $this->definedFormater = $definedFormater;
    }
    /**
     * Undocumented function
     *
     * @param null||string||object||array $object
     * @param string $support 'PlainText || Array || Json
     * @return null||string||object||array
     * 
     */
    public function serialize($object, string $support)
    {
        if (empty($object) || null === $object || !$object) {
            return null;
        }
        if ($object instanceof BuilderInterface) {
            $object = $object->getBuild();
        }
        
        if (!$this->definedFormater && !$support) {
            throw new NotFoundException('Formater');
        }
        $normalizer  = $this->normalizer ?? $this->definedNormalizer;
        $formater = $this->formater ?? $this->definedFormater;
        foreach ($normalizer  as $normalize) {
            foreach ($formater as $format) {
                
                if (!\is_array($object) || \is_object($object) && $this->dataNormalized = null) {
                    $normalizerClass  = new $normalize;
                    $this->dataNormalized = $normalizerClass->normalize($object);
                }
                
                if (\is_array($this->dataNormalized)  && null != $this->dataNormalized) {
                    $formaterClass = new $format;
                    if ($formaterClass->support($support)) {
                        $this->dataFormated = $formaterClass->transform($this->dataNormalized);
                    }
                }
            }
        }
        return $this->dataFormated;
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

