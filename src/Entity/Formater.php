<?php

namespace Entity;

use Interface\FormaterInterface;

class Formater implements FormaterInterface
{

    private mixed $data;

    /**
     * Get the value of data
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Set the value of data
     */
    public function setData($data): self
    {
        $this->data = self::normalize($data);

        return $this;
    }

    private function isJson($data): bool

    {
        if (is_string($data)) {
            json_decode($data);
            return json_last_error() === JSON_ERROR_NONE;
        }
        return false;
    }


    public static function normalize($data): ?array
    {
        if (empty($data)) {

            return [];
        }

        if (self::isJson($data) === true) {
            return json_decode($data, true);
        }

        return $data;
    }
}
