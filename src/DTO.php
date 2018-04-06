<?php

namespace StockQuote;


class DTO extends \stdClass
{
    public function __construct(array $arguments = []) {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $value) {
                if (property_exists($this, $property)) {
                    $this->$property = $value;
                }
            }
        }
    }
}