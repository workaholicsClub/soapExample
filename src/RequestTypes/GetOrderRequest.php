<?php

namespace StockQuote\RequestTypes;

use StockQuote\DTO;

class GetOrderRequest extends DTO
{
    /**
     * @var string
     */
    public $DocumentNumber;
}