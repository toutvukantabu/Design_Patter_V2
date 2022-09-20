<?php

namespace App\Strategy;

abstract class  AbstractStrategy
{

    private function isJson($data): bool

    {
        if (is_string($data)) {
            json_decode($data);
            return json_last_error() === JSON_ERROR_NONE;
        }
        return false;
    }

    private function isArray($data): bool
    {
        return gettype($data) === 'array';
    }

    
    public static function toArray($data): ?array
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
